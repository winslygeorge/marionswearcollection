<?php
session_start();

include '../dbcon.php';



if(isset($_SESSION['user'])){

    $selcheck = 'select customer.id , customer.address, carts.pro_id from customer inner join carts on customer.id = carts.customer_id';

    $sqlcheck = 'select pro_id from carts where carts_user = "'.$_SESSION['user'].'"';

    if(!$rescheck = mysqli_query($link, $selcheck)){

        $error = 'Database down';
        include 'error.php';
        exit();
    }



    while($rowcheckres = mysqli_fetch_array($rescheck, MYSQLI_ASSOC)){

        $cust_idd = $rowcheckres['id'];
        $cust_address = $rowcheckres['address'];
        $cust_proid = $rowcheckres['pro_id'];
        
        
    $slq = 'insert into orderlist set
    pro_id = "'.$cust_proid.'",
    customer_id = "'.$cust_idd.'",
    address = "'.$cust_address.'"
    ';

    if(!mysqli_query($link, $slq)){

        $error = "Error ordering the carts item";
        include 'error.php';
        exit();
    }else{

        echo 'ordered successfully';

        $del = 'delete from carts where cart_user = "'.$_SESSION['user'].'"';
        if(!mysqli_query($link, $del)){

            $error = 'carts still functional';
            include 'error.php';
            exit();
        }else{

            echo 'opereation successfull';
        }

    }
    }
$quantno = 1;

}else{

    echo 'YOU NEED TO BE LOGGED IN TO MAKE AND ORDER';
}
?>