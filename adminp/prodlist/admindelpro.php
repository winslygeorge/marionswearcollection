<?php

include '../../dbcon.php';

if(!isset($_GET['indexpp'])){

    header('Location: adminlist.php');
}else{

   $delprosql = 'delete from product where pro_id = "'.$_GET['indexpp'].'"';
   
   if(!mysqli_query($link, $delprosql)){

    $error = "could not delete product from database go back";
    include 'error.php';
    exit();
   }else{
echo '<h3>The product was successfully deleted</h3>';
   }
}
?>