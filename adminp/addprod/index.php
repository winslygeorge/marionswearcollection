<?php




include 'addpro.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>adminmanager page</title>

    <link rel = "stylesheet" type = "text/css" href = "../../stylecss/styles.css">
    <link rel = "stylesheet" type = "text/css" href = "../../stylecss/logreg.css">

        <style>
    
    .err{

        color: red;
    }
    </style>
<script type = "text/javascript" src="../../scripts/jscript.js"></script>
</head>
<body>


<div class= "form">
       <center> <caption><h4>ADD NEW PRODUCT<h4></caption></center>
<form  method = 'post' action  = "?" enctype = "multipart/form-data" method="post">
<label for="pronam" class="lab">Pro_name:</label>
<input type = "text" name="pronam" class = "inp">
<span class="err">*<?php echo $GLOBALS['pronamerr']; ?></span>
<br><br>
<label for="procat" class="lab">Pro_category:</label>
<select name="cat" id="cate">

<option value="101">Dresses</option>
<option value="102">Shirts</option>
<option value="103">Skirts</option>
<option value="104">Earings</option>
<option value="105">Shoes</option>
<option value="106">Trousers</option>
<option value="107">Underwares</option>
</select><span class="err">*<?php echo $GLOBALS['procaterr']; ?></span>
<br><br>
<label for="color">pro_color:</label>
<input type="text" name="procolor" class = "inp">
<span class="err">*<?php echo $GLOBALS['procolorerr']; ?></span>
<br><br>
<label for="quant">pro_quantity:</label>
<input type="number" name="proquant" class = "inp">
<span class="err">*<?php echo $GLOBALS['proquanterr']; ?></span>
<br><br>

<label for="price">Product price:</label>
<input type="text" name="proprice" class = "inp">
<span class="err">*<?php echo $GLOBALS['propriceerr']; ?></span>
<br><br>
<label for="desc">product description:</label><br>
<br>
<span class="err">*<?php echo $GLOBALS['prodescerr']; ?></span>
<div>
<textarea name="prodesc" id="desc" cols="30" rows="10" class="des"></textarea>
</div>



<label for="image">Pro_image</label><br>
<span class="err">*<?php echo $GLOBALS['proimageerr']; ?></span><br>
<input type="file" name="proimage"  accept = ".png, .jpg, .gif, .webp" class = "inp">
<br><br>

<input type="submit" value="submit" id = 'insert'>
<input type="reset" value="reset">
</form>
<button id ="check"  onclick = myFunction()>Check</button>
</div>

</body>
</html>
<?php


?>