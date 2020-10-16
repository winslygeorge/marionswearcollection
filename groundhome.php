

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta author = "Georgos winslow">
        
        <title>MARIONS WEAR COLLECTION</title>
        <link rel="stylesheet" href="stylecss/styles.css">
        <link  href = "homestyle.css" type="text/css" rel="stylesheet">

<style>

    body{

        width: inherit;
    }

.txt{

width: 100%;
  margin-bottom: 3em;
    color: #a1c3d1;
    text-shadow: 3px 2px 5px black;
    font-size: 2em;

     text-align: center;
}
button{

    width:18em;
    height: 5em;
    border-radius: 8px;

  background-color: #e64398;
  color: #a1c3d1;
  
}

</style>

    </head>
    <body>


    <header>

           
                
<div class = 'smen'>
                <div class="repre"> 
        <div class = 'men'>
        <button class = "menu"> 
                MENU</button>
       
<div class = 'nmen'> 
<ul class = 'hmens'>
<li class = 'hmen'><a href = "prodhome"><button class = "btn">Home</button></a></li>
<li class="hmen">
        
   
        
        <a href = "adminp"><button class = "btn">Admin</button></a>



</li>
<li class="hmen"><a href ="adminp/logadmin/logout">
<button class="btn">Adminlogout</button> </a></li>
<li class = 'hmen'><a href = "#contact"><button class = "btn">contact</button></a></li>
<li class = 'hmen'><a href = "registerc">
<button class = "btn"> register</button></a></li>
<li class = 'hmen'>  <a href = "registerc/loginc/"> <button class = "btn">login</button></a></li>
<li class = 'hmen'> <a href = "registerc/logout"><button class = "btn">Logout</button></a></li>
</ul>
</div>
</div>


<a href = "registerc/loginc">  <button class="lgin">Login</button></a>
<a href = "registerc/logout"> <button class="lgout">Logout</button></a>

<img src = 'images/deeplogo.png' class = "img" id ="logimg">

</div>
<div class="tit">
<h1><b> MARIONS' WEAR COLLECTION</b></h1>
</div>
</div>
<div class = "nav">


        <li class = 'hment'><a href = "prodhome"><button class = "butt">Home</button></a></li>
        <li class="hment"><a href = "adminp"><button class = "butt">Admin</button></a></li>
        <li class = 'hment'><a href = "#contact"><button class = "butt">contact</button></a></li>
        <li class = 'hment'><button class = "butt"  id = "pcart" onclick = "showcp();">cart</button></li>
        <li class = 'hment'><a href = "registerc"><button class = "butt"> register</button></a></li>
        <li class = 'hment'><a href = "registerc/loginc"><button class = "butt">login</button></a></li>
        <li class = 'hment'> <a href = "registerc/logout"><button class = "butt">Logout</button></a></li>
           

</div>
</header>



        <div class="responsive">
<div class="gallery">

<div class = 'images'>

<figure class = "figure">
<img src="images2/kaauma.png" alt = "kaauma shoes" >
<caption>KAAUMA SHOES</caption>


</figure>

<figure  class = "figure">
<img src="images2/afrocentric.png" alt = "Afro african shirt" >
<caption>AFROCENTRIC FIBRE SHIRT</caption>


</figure>

<figure  class = "figure">
<img src="images2/blackgolddashinki.png" alt = "kaauma shoes" >
<caption>BLACKGOLD DASHINKI</caption>


</figure>


<figure  class = "figure">
<img src="images2/sky.png" alt = "kaauma shoes" >
<caption>dark blue sky</caption>


</figure>

<figure  class = "figure">
<img src="images2/africanformal.png" alt = "kaauma shoes" >
<caption>AFRO-FORMAL SHIRT</caption>


</figure>

<figure  class = "figure">
<img src="images2/ragsweet.png" alt = "kaauma shoes" >
<caption>RAG SWEATER HOOD</caption>


</figure>



</div>



        </div>

        <div class = 'txt'>

<h2>Marions Women Wear Collection</h2>
<h4>To see more click on the link button below</h4>
<a href = 'prodhome'><button> click to see more</button></a>

</div>

    </body>

    </html>
  
<script src="scripts/carrosel.js"></script>
<script src="scripts/mainpro.js"></script>
<?php

include 'htmlfiles/footer.html';

?>