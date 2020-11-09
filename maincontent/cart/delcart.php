<?php
session_start();
require '../dbcon.php';


if($_GET['indexs']){

    $detsql = 'delete  from carts where cart_id = "'.$_GET['indexs'].'"';

    if(!$delres = mysqli_query($link, $detsql)){

        $error = 'could not delete the item from the cart';
        include 'error.php';
        exit();
    }
header('Location: ../prodhome');
}


?>