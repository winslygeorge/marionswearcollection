<?php
session_start();
if(!isset($_SESSION['admin'])){

    header('Location: ../../../../prodhome');
    

}else{


session_destroy();
header('Location: ../../../../index.php');
exit();
}
?>