<?php  

session_start();

include '../dbcon.php';

if(!isset($_SESSION['user'])){

    echo 'YOU NEED TO BE LOGGED IN TO MAKE AN ORDER';
    $selectsqls = 'select * from carts where cart_user = "noone"';

}else{

    $selectsqls = 'select * from carts where cart_user = "'.$_SESSION['user'].'"';

}



?>
<table>
    <caption style = "color:white;">THESE ARE THE ITEMS IN CART</caption>

<tr>

<th>ITEM_NAME</th>
<th>ITEM_COLOR</th>
<th>PRICE</th>
<th>DELETE</th>
</tr>
        <?php

        if(!$selectsql = mysqli_query($link, $selectsqls)){

            $error = 'could product id is not in the the database';
            include 'error.php';
            exit();
        }else{


            $d = 0;

            $total = 0;
        while($rowpro = mysqli_fetch_array($selectsql, MYSQLI_ASSOC)){

$nameitem = $rowpro['cart_name'];
$coloritem = $rowpro['cart_color'];
$priceitem = $rowpro['cart_price'];
$iditem = $rowpro['cart_id'];

$d = $d+1;

$total += $priceitem;


?>

<tr class = "odd">
<td><?php echo $nameitem; ?></td>
<td><?php echo $coloritem;?></td>
<td><?php echo $priceitem; ?></td>
<td>
<form action = "../cart/delcart.php" method = "get">
 <button name = "indexs" class = "delbtn" value = <?php echo $iditem; ?>>Delete</button>
 </form>
 
 </td>
</tr>

<?php







        }

       

    }
        ?>



<tr>
<td>TOTAL</td>
<td><?php echo $total;?></td>

</tr>

</table>
<button id = 'hidecart' onclick = "hidecp()">ok</button>
<button id = 'checkout' onclick = "checkouts();"> checkout</button>


