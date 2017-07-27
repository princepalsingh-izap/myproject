<?php
require_once "connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

if (isset($_POST['signup'])) {
   
    $qryi = 'INSERT INTO data VALUES("'.$name.'","'.$email.'","'.$password.'")';
    if(mysql_query($qryi, $conn))
    {
     header("location:login.php ");
    }
    else{
       echo "invalid data";
    }


 }
?>
<html>
<head>
<title>signup</title>
</head>
<body style="text-align:center">
<h1>Signup!</h1>
<div>
<form method="post" action="signup.php">
Name <input type="text" name="name" required="required">
email<input type="text" name="email" required="required" >
Password<input type="password" name="password" required="required">
<input type="submit" name="signup" value="signup">
</form>
</div>
</body>
</html>
