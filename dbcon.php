<?php

$link = mysqli_connect("georgserver.database.windows.net", "georgos", "Winwings2.", "marionsdatabse");
if(!$link){

    $error = "Could not connect to Mysqli : ". mysqli_error($link);
    include 'error.php';
    exit();
}


if(!mysqli_set_charset($link, 'utf8')){
    


$error = 'could not set charset';
include 'error.php';
exit();
}
?>