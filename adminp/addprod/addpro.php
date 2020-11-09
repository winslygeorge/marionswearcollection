<?php

session_start();

if(!isset($_SESSION['admin'])){

    header('Location: ../../');
}else{




require_once('../../dbcon.php');


global $proname, $procat, $procolor, $prodesc, $proprice, $proquant, $image_name;
global  $pronamerr, $procaterr, $proimageerr, $procolorerr, $prodescerr, $propriceerr, $proquanterr, $proimageerr;

if($_SERVER['REQUEST_METHOD']== 'POST'){

    function test_input($data){

        $data = stripslashes($data);
        $data = trim($data);
        $data = htmlspecialchars($data);

        return $data;
    }

if($_FILES['proimage']['size'] !== 0){

$target_dir = '../../upload/';
$target_file = $target_dir. basename($_FILES['proimage']['name']);
$name = $_FILES['proimage']['name'];
//select file type

$imagefileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//valid file extension

$exe_array = ['jpg', 'png', 'gif', 'jpeg'];

for($x = 0; $x < 4; $x++){

    if($imagefileType === $exe_array[$x]){

        echo 'file type found';

        //upload image file
        move_uploaded_file($_FILES['proimage']['tmp_name'], $target_dir.$name);

        $GLOBALS['image_name'] = test_input($name);


        }
        

    }
}else{

    $GLOBALS['proimageerr']  = 'Please select an Image';
}
if(!empty($_POST['pronam'])){

    

   if(!preg_match('/^[a-zA-Z\s]+$/', $_POST['pronam'])){
$GLOBALS['pronamerr'] = 'Product name can only contain letters and white spaces';

   }else{


$GLOBALS['proname'] = test_input($_POST['pronam']);

   }

}else{

    $GLOBALS['pronamerr'] = 'required';
}
if(!empty($_POST['procolor'])){

    if(!preg_match('/^[a-zA-Z0-9]+$/', $_POST['procolor'])){

        $GLOBALS['procolorerr'] = 'can only be letters and hex digits';
    }else{

        $GLOBALS['procolor'] = test_input($_POST['procolor']);
    }
}else{

    $GLOBALS['procolorerr'] = 'required';
}

if(!empty($_POST['cat'])){

    $GLOBALS['procat'] = test_input($_POST['cat']);
}else{

    $GLOBALS['procaterr'] = 'required';
}

if(!empty($_POST['proquant'])){

    if(!preg_match('/^[0-9]+$/', $_POST['proquant'])){

        $GLOBALS['proquanterr'] = 'only digits required';

    }else{

        $GLOBALS['proquant'] = test_input($_POST['proquant']);

    }
}else{

    $GLOBALS['proquanterr'] = 'required';
}
if(!empty($_POST['prodesc'])){

    if(!preg_match('/^[a-zA-z\s]+$/', $_POST['prodesc'])){

        $GLOBALS['prodescerr'] = 'only letters allowed';

    }else{


        $GLOBALS['prodesc'] = test_input($_POST['prodesc']);
    }
}else{

    $GLOBALS['prodescerr'] = 'required';
}
if(!empty($_POST['proprice'])){
if(!preg_match('/^[0-9.]+$/', $_POST['proprice'])){

    $GLOBALS['propriceerr'] = 'only numbers allowed';

}else{

$GLOBALS['proprice'] = test_input($_POST['proprice']);
}

}else{

    $GLOBALS['propriceerr'] = 'required';
}


if($proname && $procat && $procolor && $prodesc && $proprice && $proquant && $image_name){



    $ins = 'insert into product set
    category_id = "'.$procat.'",
    pro_name = "'.$proname.'",
    pro_color = "'.$procolor.'",
    pro_desc =  "'.$prodesc.'",
    pro_price = "'.$proprice.'",
    pro_quant = "'.$proquant.'",
    pro_image = "'.$image_name.'"';
    
    
    $res = mysqli_query($link, $ins);
    
    if(!$res){
    
        $error = 'could not send data to the database';
        include 'error.php';
        exit();
    }

    if($GLOBALS['proname'] && $GLOBALS['procat'] && $GLOBALS['prodesc'] && $GLOBALS['proquant'] && $GLOBALS['proprice'] && $GLOBALS['image_name'] && $GLOBALS['procolor'] ){

        header('Location: ../prodlist');
        
        }
}


}

}
?>