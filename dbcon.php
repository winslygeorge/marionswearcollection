<?php

$link = mysqli_connect("localhost", "root", "winwings2", "marionsdatabase");
if(!$link){

    $error = "Could not connect to Mysqli";
    include 'error.php';
    exit();
}


if(!mysqli_set_charset($link, 'utf8')){
    


$error = 'could not set charset';
include 'error.php';
exit();
}
?>