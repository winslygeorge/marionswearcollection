<?php

session_start();

require '../dbcon.php';



if(isset($_SESSION['user'])){

if($_GET['index']){

$sqlsel = 'select * from product where pro_id = "'.$_GET['index'].'"';

$sqlresults = mysqli_query($link, $sqlsel);

if(!$sqlresults){

    $error = 'The Product is not Available';
    include 'error.php';
    exit();
}else{

   while($prorow = mysqli_fetch_array($sqlresults, MYSQLI_ASSOC)){

        $itemname = $prorow['pro_name'];
        $itemprice = $prorow['pro_price'];
        $itemcolor =  $prorow['pro_color'];
        $itemid = $prorow['pro_id'];


    }

    $getcustId = 'select id from customer where username = "'.$_SESSION['user'].'"';

    $resget_id  = mysqli_query($link, $getcustId);

    while($rowgetid = mysqli_fetch_array($resget_id, MYSQLI_ASSOC)){

        $cust_id = $rowgetid['id'];
    }
 echo $cust_id;
    $sqlinsert = 'insert into carts set
    cart_user = "'.$_SESSION['user'].'",
customer_id = "'.$cust_id.'",
    pro_id = "'.$itemid.'",
    cart_name = "'.$itemname.'",
    cart_color = "'.$itemcolor.'",
    cart_price = "'.$itemprice.'"';
if(!mysqli_query($link, $sqlinsert)){

$error = 'Item is not in the Database';
include 'error.php';
exit();
    }else{




      header('Location: .');  


        

    }
    
}
}
}
else{

    echo 'YOU NEED TO BE LOGIN TO MAKE AN ORDER';
    exit();
}
    
    
    

    ?>




