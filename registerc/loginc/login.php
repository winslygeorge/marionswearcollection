<?php
session_start();
require_once '../../dbcon.php';



global $logemailerr, $logpasswerr;

global $logemail, $logpassw;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    function logtestInput($data){

        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }

    if(empty($_POST['logemail'])){

        $GLOBALS['logemailerr'] = "required";
    }else{

        $GLOBALS['logemail'] = logtestInput($_POST['logemail']);
    }


    if(empty($_POST['logpassw'])){

        $GLOBALS['logpasswerr'] = "required";
    }else{

$GLOBALS['logpassw'] = logtestInput($_POST['logpassw']);
    }


    $logsel = 'select username, password, email from customer where email = "'.$GLOBALS['logemail'].'"';

    $sqlreslog = mysqli_query($link, $logsel);

if(!$sqlreslog){

    $error = 'the select query not successful';
    include 'error.php';
    exit();
}else{

  


echo mysqli_num_rows($sqlreslog);

        while($rowlog = mysqli_fetch_array($sqlreslog, MYSQLI_ASSOC)){

            $rowemail = $rowlog['email'];
            $rowpassw  = $rowlog['password'];
$rowusername = $rowlog['username'];
            
            if($GLOBALS['logemail'] == $rowemail){

                if(password_verify($GLOBALS['logpassw'], $rowpassw)){
                
           $GLOBALS['successpass'] = $rowpassw;

           $_SESSION['user'] = $rowusername;
           if($GLOBALS['logemail'] && $GLOBALS['successpass'] && isset($_SESSION['user'])){

         header('Location: ../../prodhome');
        
        }
                
                }else{
                
                
                    $GLOBALS['logpasswerr'] = 'incorrect password';
                }
                
                
                    }else{
                
                
                        $GLOBALS['logemailerr'] = 'There is no account registered with the provided email';
                    }
        }

       
    }
}


?>