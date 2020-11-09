
<?php

echo "connecting";
session_start();

if(!isset($_SESSION['admin'])){

    echo "error";
    header('Location: ../../../prodhome');
}else{

echo "inside navp";

include '../htmlfiles/header.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home Directory</title>
    <style>

        body{

            text-align: center;
        }
        .bodyc{
margin: 0 auto;
            display: flex;

            flex-direction: column;
        }
    .adnav{

     
        margin: 1em;
    width: 9em;
    height: 4em;
    

content: center;

border-radius: 5px;
        font-size: 1em;
        border: 3px solid rgba(0, 0, 0, 0);
        color: lawngreen;
        background-color:black;
    }
    </style>
</head>
<body>
    <div class="bodyc">
<caption>Administrator Navigation Page</caption>
      <a href = "addprod">  <button class="adnav">Add Product</button></a>
      <a href ="prodlist"> <button class="adnav">View Product</button>
        <a href ="order">  <button class="adnav">check orderlist</button>
        <a href ="logout"> <button class="adnav">Logout</button></a>
    </div>
</body>
</html>

<?php
include '../htmlfiles/footer.html';

}
?>