<?php

session_start();

if(!isset($_SESSION['admin'])){

    header('Location: ../../');
}else{




require '../../dbcon.php';


?>

<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>admin product list</title>
                <link rel="stylesheet" href="../../stylecss/styles.css">
            </head>
            <body>
            <center> <h2>ORDERLIST</h2></center>
 <div id="contp">
<table class = "tab">
<tr class="heading">

<th class = "hd">CLIENT ID</th>
<th class = "hd">PRODUCT ID</th>
<th class="hd">CLIENT_FIRST NAME</th>
<th class = "hd">CLIENT_SECOND NAME</th>
<th class = "hd">TELNO</th>
<th class = "hd">ADDRESS</th>
<th class = "hd">CITY</th>
<th class = "hd">EMAIL</th>


</tr>

<?php
$orderselsql = 'select orderlist.pro_id, customer.cust_fname, customer.cust_lname, customer.email, orderlist.address, customer.city, orderlist.customer_id, customer.email, orderlist.address, customer.city, customer.tel_no from orderlist inner join customer on customer.id = orderlist.customer_id';

$resorderselsql = mysqli_query($link, $orderselsql);

if(!$resorderselsql){

$error = 'There is no order found';
include 'error.php';
exit();
}else{

    $counter = 0;
    while($roworder = mysqli_fetch_array($resorderselsql, MYSQLI_ASSOC)){

        $orderpro_id = $roworder['pro_id'];
        $ordercust_id = $roworder['customer_id'];
        $ordercust_city = $roworder['city'];
        $ordercust_address = $roworder['address'];
        $ordercust_no = $roworder['tel_no'];
     $ordercust_email = $roworder['email'];
        $ordercust_fname = $roworder['cust_fname'];
        $ordercust_lname  = $roworder['cust_lname'];

        $counter = $counter +1;
        
        ?>
<tr class="content">
<td><?php echo $ordercust_id;?></td>
<td><?php echo $orderpro_id;?></td>
<td><?php echo $ordercust_fname;?></td>
<td><?php echo $ordercust_lname;?></td>
<td><?php echo $ordercust_no;?></td>
<td><?php echo $ordercust_address;?></td>
<td><?php echo $ordercust_city;?></td>
<td><?php echo $ordercust_email;?></td>

</tr>
        <?php

    }
}
?>

</table>
</div>
GO TO <a href = "../navp.php"> NAVIGATION PAGE</a>
</body>
</html>
<?php
}
?>