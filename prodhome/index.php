<?php



require_once 'retrive.php';

include '../htmlfiles/header.html';

?>

<!DOCTYPE html>
<html>
<head>
	<title>GEORGSWEAR HOME PAGE</title>
	<link  href = "../stylecss/productp.css" type="text/css" rel="stylesheet">


<script src="../scripts/jscript.js"></script>

	</head>

	<body>

	<div id = "cart" ></div>

		<div class = 'product_gallery'>

		<?php

$z = 0;
while($row = mysqli_fetch_array($resultss, MYSQLI_ASSOC)){

	if($x == 20){

	   break;
	}else{


	   $prodcolnam = $row['pro_name'];
	   $prodcolid = $row['pro_id'];
	   $prodcolimg = $row['pro_image'];

	   $prodcoldesc = $row['pro_desc'];
	   $prodcolprice = $row['pro_price'];
	   $prodcolcol = $row['pro_color'];

   $z = $z+1;

	}
	   



 ?>
	
<div class = 'figure'>
	
	<img class = "pp" src = "<?php echo $target_dirr.$prodcolimg;?>" >
	<br>

	<div class = "proname">

	Name: <?php echo strtoupper($prodcolnam); 
	 ?></div>

	 <div class = 'product_desc'>

	 	<div class = 'des'>


	 	<strong>Description:</strong><br><?php echo $prodcoldesc ?>
	 </div>

	 <div class = 'color'>


	 <strong>	Color: </strong><?php echo $prodcolcol ?>
	 </div>
	 <div class = 'price'>

	 <strong>	Ksh.<?php echo $prodcolprice ?></strong>
	 </div>


 

	 </div>

	 <div class = 'loveheart'>
	 	<img class = "hearts" id ="<?php echo $z;?>" src = '../images2/heart_2.svg'>
	 	<img src = '../images2/icon_2.svg' id = "<?php echo $z;?>"class = 'star'>
	 	<button name = "addpro" class = 'add' id = "<?php echo $z; ?>" value = <?php echo $prodcolid; ?>>+</button></a>

	 </div>

</div>

<?php
}

?>

</div>


<script>




var btn = document.querySelectorAll(".add");




var b = btn.length;

var i = 0;

for(i; i < b; i++){

	btn[i].onclick = function(){
var indexp = btn[this.id - 1].value;



		btn[this.id-1].setAttribute("class", "addclicked");
		var xht;

		try{
xht = new XMLHttpRequest();
		}catch(e){
			try{
				xht = new ActiveXObject('MSXML.XmlHttp');
			}catch(e){

				xht = new ActiveXObject('Microsoft.XmlHttp');
			}throw alert('something is wrong with your browser');

				
			
		}
xht.onreadystatechange = function(){

	if(xht.readyState == 4 && xht.status == 200){
	
	document.getElementById('cart').innerHTML = this.responseText;

	









	}
	
}

xht.open('GET', '../cart/cart.php?index='+indexp, true);
	xht.send();
		
	}

}



var hearts =   document.querySelectorAll('.hearts');

var h = 0;


for(h = 0; h < hearts.length; h++){

hearts[h].onclick = function(){


	alert('You liked the product');

	hearts[this.id-1].setAttribute("class", "liked");


}

}

var star = document.querySelectorAll('.star');
var s = 0;

for(s = 0; s < star.length; s++){

	star[s].onclick = function(){

		alert('You stared the Product');
		star[this.id-1].setAttribute("class", "stared");
	}
}

</script>


	</body>
</html>
<?php
include '../htmlfiles/footer.html';
?>
