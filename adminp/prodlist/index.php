<?php
session_start();

if(!isset($_SESSION['admin'])){

    header('Location: ../../');
}else{



require '../../dbcon.php';


    $sqlselo = 'select pro_id , pro_name, pro_color, category_id ,pro_price from product';

    $ressqlselo = mysqli_query($link, $sqlselo);

    if(!$ressqlselo){
        $error = "could not connect to the database";
        include 'error.php';
        exit();
    }else{

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
               <center> <h2>PRODUCTS AVAILABLE FOR SALE</h2></center>
            <div id="contp">      
          
<table>
<tr class="heading">
<th class = "hd">PRODUCT ID</th>
<th class="hd">PRODUCT CATEGORY</th>
<th class = "hd">PRODUCT NAME</th>
<th class = "hd">PRODUCT COLOR</th>
<th class = "hd">PRODUCT PRICE</th>
<th class="hd">DELETE</th>
</tr>
        <?php
$counter = 0;
        while($rowressqlselo = mysqli_fetch_array($ressqlselo, MYSQLI_ASSOC)){

            $proidrow = $rowressqlselo['pro_id'];
            $pronamerow = $rowressqlselo['pro_name'];
            $procategoryrow = $rowressqlselo['category_id'];
            $procolorrow = $rowressqlselo['pro_color'];
            $propricerow = $rowressqlselo['pro_price'];
$counter = $counter +1;
            ?>

<tr class="content">
<td><?php echo $proidrow;?></td>
<td><?php echo $procategoryrow;?></td>
<td><?php echo $pronamerow;?></td>
<td><?php echo $procolorrow;?></td>
<td><?php echo $propricerow;?></td>
<td><button class="del" id = "<?php echo $counter;?>" value = "<?php echo $proidrow; ?>">Delete</button></td>
</tr>

            <?php
        }

        
        ?>
</table>
</div>
GO TO <a href = "../navp.php"> NAVIGATION PAGE</a>
    </body>
    </html>
<script src="../../scripts/adminpldel.js"></script>
        <?php
    }

}
?>

