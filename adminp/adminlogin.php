<?php


session_start();

include_once '../dbcon.php';



global $logadminerr, $logpasswerr;

global $logadmin, $logpassw;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    function logtestInput($data){

        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }

    if(empty($_POST['logadmin'])){

        $GLOBALS['logadminerr'] = "required";
    }else{

        $GLOBALS['logadmin'] = logtestInput($_POST['logadmin']);
    }


    if(empty($_POST['logpassw'])){

        $GLOBALS['logpasswerr'] = "required";
    }else{

$GLOBALS['logpassw'] = logtestInput($_POST['logpassw']);
    }


    $logselad = 'select admin_code, code_password from admin where admin_code = "'.$GLOBALS['logadmin'].'"';

    $sqlreslogad = mysqli_query($link, $logselad);

if(!$sqlreslogad){

    $error = 'the select query not successful';
    include 'error.php';
    exit();
}else{

  


echo mysqli_num_rows($sqlreslogad);

        while($rowlogad = mysqli_fetch_array($sqlreslogad, MYSQLI_ASSOC)){

            $rowemailad = $rowlogad['admin_code'];
            $rowpasswad = $rowlogad['code_password'];

            
            if($GLOBALS['logadmin'] == $rowemailad){

                if($GLOBALS['logpassw'] == $rowpasswad){
                
           $GLOBALS['successpass'] = $rowpasswad;

           $_SESSION['admin'] = $rowemailad;
           if($GLOBALS['logadmin'] && $GLOBALS['successpass'] && isset($_SESSION['admin'])){

            ob_start();

                header('Location: ./../navp.php');

                ob_end_flush();

        
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