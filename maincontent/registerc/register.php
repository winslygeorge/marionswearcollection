<?php

include '../dbcon.php';

global $fnamerr , $lnamerr , $emailerr , $ageerr , $telerr , $gendererr , $usererr , $passwerr, $cityerr, $addresserr;

global $fnam , $lnam, $email , $age , $telno , $gender , $unam , $hashed_passw , $city, $address;

function testInput($data){

    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);

    return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if($_POST['telno']){
    // colect tel no , username and email info from the database to check if they already exit

    $sqlselect = 'select username, tel_no, email from customer';

    $resselectsql = mysqli_query($link, $sqlselect);

    if(!$resselectsql){
        $error = 'database is down';
        include 'error.php';
        exit();
    }

    while($rowsel = mysqli_fetch_array($resselectsql, MYSQLI_ASSOC)){

        $usenam = $rowsel['username'];
        $usertelno = $rowsel['tel_no'];
        $useremail = $rowsel['email'];

        if($usenam == $_POST['unam']){
$GLOBALS['usererr'] = 'The username already exits';

        }else{

            if(empty($_POST['unam'])){

                $GLOBALS['usererr'] = 'required';
                
                    }else{
                
                    
                
                           $GLOBALS['unam'] = testInput($_POST['unam']);
                       }

        }

        if($usertelno == $_POST['telno']){

            $GLOBALS['telerr'] = 'The phone number already already';
        }else{

            if(empty($_POST['telno'])){

                $GLOBALS['telerr'] = 'Required';
            }else{
        
               if(!preg_match('/^[0-9]{10}/', $_POST['telno'])){
        $GLOBALS['telerr'] = "invalid number";
                
               }else{
        
                $GLOBALS['telno'] = testInput($_POST['telno']);
               }
            }
        }

        if($useremail == $_POST['email']){

            $GLOBALS['emailerr'] = 'The email already exits';
        }else{

            if(empty($_POST['email'])){

                $GLOBALS['emailerr'] = "Required";
            }else{
        
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        
                    $GLOBALS['emailerr'] == "Invalid email format";
                }else{
        
                    $GLOBALS['email'] = testInput($_POST['email']);
                }
            }

        }
    }
     

if(empty($_POST['fnam'])){

$GLOBALS['fnamerr'] = "Required";

}else{

 if(!preg_match('/^[a-zA-Z\s]+$/', $_POST['fnam'])){

    $GLOBALS['fnamerr'] = "letters and spaces only allowed";

 }else{

    $GLOBALS['fnam'] = testInput($_POST['fnam']);
 }

}

if(empty($_POST['lnam'])){

    $GLOBALS['lnamerr'] = "Required";
    
    }else{
    
     if(!preg_match('/^[a-zA-Z\s]+$/', $_POST['lnam'])){
    
        $GLOBALS['lnamerr'] = "letters and spaces only allowed";
    
     }else{
    
        $GLOBALS['lnam'] = testInput($_POST['lnam']);
     }
    
    }

  




     
    

  

    if(empty($_POST['age'])){
$GLOBALS['ageerr'] = 'Required';
    }else{


        $GLOBALS['age'] = testInput($_POST['age']);
    }

    if(empty($_POST['gender'])){

        $GLOBALS['gendererr'] = "Required";
    }else{

        $GLOBALS['gender'] = testInput($_POST['gender']);
    }

    if(empty($_POST['address'])){

        $GLOBALS['addresserr'] = 'required';
    }else{



            $GLOBALS['address'] = testInput($_POST['address']);
        
    }


    if(empty($_POST['city'])){

        $GLOBALS['cityerr'] = 'required';
    }else{

        if(!preg_match('/^[a-zA-Z\S]*$/',$_POST['city'])){


        $GLOBALS['cityerr']  = 'invalid city input';
        }else{

            $GLOBALS['city'] = testInput($_POST['city']);
        }
    }

    if(empty($_POST['passw'])){

        $GLOBALS['passwerr'] = 'Required';

    }else{


        if($_POST['passw'] !== $_POST['repassw']){

$GLOBALS['passwerr'] = "The password do not match";

        }else{

            if(!preg_match('/^.*(?=.{6})(?=.*[0-9])(?=.*[A-Z]).*$/', $_POST['passw'])){

                $GLOBALS['passwerr'] = "6 letters and digits are the minmum lenght\n at least one capital letter is required";
            }else {
                # code...
    
                $passw = testInput($_POST['passw']);
    
                $GLOBALS['hashed_passw'] = password_hash($passw, PASSWORD_DEFAULT);
            }
        }
        
      
    }


    if($GLOBALS['fnam'] && $GLOBALS['lnam'] && $GLOBALS['city'] && $GLOBALS['address'] && $GLOBALS['email'] && $GLOBALS['gender'] && $GLOBALS['age'] && $GLOBALS['unam'] && $GLOBALS['telno'] && $GLOBALS['hashed_passw']){

        $inssql = 'insert into customer set 
        cust_fname = "'.$GLOBALS['fnam'].'",
        cust_lname = "'.$GLOBALS['lnam'].'",
        email = "'.$GLOBALS['email'].'",
        username = "'.$GLOBALS['unam'].'",
        tel_no = "'.$GLOBALS['telno'].'",
        password = "'.$GLOBALS['hashed_passw'].'",
        city = "'.$GLOBALS['city'].'",
        address = "'.$GLOBALS['address'].'"
        ';
        
          
      If(!mysqli_query($link, $inssql)){
      
          $error = 'could not add the member to the database';
          include 'error.php';
          exit();
      }else{
      
          echo 'successfully added';

header('Location: loginc');
      }
      
      }
      }else{
      
      echo 'sorry database down';
      }
       
    }


?>