
<?php 

include 'adminlogin.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminstration page</title>
    <link rel="stylesheet" href="../stylecss/logreg.css" type="text/css">
    </head>
<body>
    <div class="form">
       <center> <caption class="logreghead"><h4><b>LOGIN AS ADMINISTRATOR<b></h4></caption></center><br><br>
<form action="?" method = "post">

<label for="admin" class="lab">ADMIN-CODE:</label>
<input type = "text" name="logadmin" class = "inp">
<span class="err">*<?php echo $GLOBALS['logadminerr']; ?></span>
<br><br>

<label for="password" class="lab">Password:</label>
<input type="password" name="logpassw" class= "inp">
<span class="err">*<?php echo $GLOBALS['logpasswerr']; ?></span>
<br><br>

<input type="submit" value="Login" class = "buttn" id = "sub">
<input type="reset" value="Reset" class = "buttn" id = "rest">
<br><br>

Remember me<input type="checkbox" name="remember">



</form>

<p>


<br><br>Go Back To <a href = "../prodhome">Home Page</a>

</p>

    </div>
</body>
</html>