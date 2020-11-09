<?php

require_once 'register.php';





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
    <link rel="stylesheet" href="../stylecss/logreg.css">
</head>
<body>

<div class="form">
  <center>  <caption class = "logreghead"><b><h4>REGISTER FOR AN ACCOUNT HERE</h4></b></caption></center><br><br>
    <form action="?" method = "post">

    <label for="fnam" class="lab">First Name:</label>
<input type = "text" name="fnam" class = "inp">
<span class="err">*<?php echo $GLOBALS['fnamerr']; ?></span>
<br><br>

<label for="lnam" class="lab">Last Name:</label>
<input type = "text" name="lnam" class = "inp">
<span class="err">*<?php echo $GLOBALS['lnamerr']; ?></span>
<br><br>

<label for="email" class="lab">Email:</label>
<input type = "email" name="email" class = "inp">
<span class="err">*<?php echo $GLOBALS['emailerr']; ?></span>
<br><br>

<label for="gender" class="lab">Gender:</label><br><br>
Male:<input type="radio" name="gender" value = "M">
Female:<input type="radio" name="gender" value = "F">
Other:<input type="radio" name="gender" value = "other">
<span class="err">*<?php echo $GLOBALS['gendererr']; ?></span>
<br><br>

<label for="age" class="lab">age:</label>
<input type = "number" name="age" class = "inp">
<span class="err">*<?php echo $GLOBALS['ageerr']; ?></span>
<br><br>

<label for="tel" class="lab">TEL Number:</label>
<input type="tel" name="telno" class = "inp">
<span class="err">*<?php echo $GLOBALS['telerr']; ?></span>
<br><br>


<label for="city" class="lab">City:</label>
<input type="search" name="city" id="cit" class = "inp">
<span class="err">*<?php echo $GLOBALS['cityerr']; ?></span>
<br><br>


<label for="address" class="lab">Address:</label>
<input type="text" name="address" class = "inp">
<span class="err">*<?php echo $GLOBALS['addresserr']; ?></span>
<br><br>


<label for="username" class="lab">Username:</label>
<input type = "text" name="unam" class = "inp">
<span class="err">*<?php echo $GLOBALS['usererr']; ?></span>
<br><br>

<label for="password" class="lab">Password:</label>
<input type="password" name="passw" class = "inp">
<span class="err">*<?php echo $GLOBALS['passwerr']; ?></span>
<br><br>


<label for="repassword" class="lab">Re-Enter Password:</label>
<input type="password" name="repassw" class = "inp">

<br><br>

<input type="submit" value="Submit" class = "buttn" id = "sub">
<input type="reset" value="Reset" class = "buttn" id = "rest">
<p>
    Have an account already just<a href ="loginc">log in here</a>
    <br>Go Back To  <a href = "../prodhome"> Home Page</a>
</p>
    </form>
    </div>
</body>
</html>
 