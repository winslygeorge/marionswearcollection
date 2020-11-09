<?php
session_start();

if(!isset($_SESSION['admin'])){

    echo 'YOU ARE NOT AN ADMINISTRATOR';
}else{

    unset($_SESSION['admin']);
    session_destroy();
  header('Location: ../../prodhome');
}
?>