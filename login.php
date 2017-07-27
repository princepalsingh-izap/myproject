<?php
session_start();
require_once "connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['search']))
 {
    if(!isset($_SESSION['email'])){
      header("location:login.php");
     }}


if (isset($_POST['login'])) 
{
  session_start();
    $qryi = 'SELECT * FROM data WHERE email ="'.$email.'" and password = "'.$password.'"';
    $result=mysql_query($qryi,$conn); 
      if(mysql_num_rows($result)==1)
    {
     $_SESSION['email']=$email;
     header("location:logined.php ");
   }else{
           echo "invalid login";
   }
    
}
?>
<html>
<head>
<title>login</title>
</head>
<body style="text-align:center">
<h1>Login!</h1>
<h1><a href="index.php">home</a></h1>
<div>
<form method=post action=login.php>
 Email<input type="text" name="email" required="required">
 Password<input type="password" name="password" required="required">
        <input type="submit" name="login" value="submit">
</form>
<form align="center"method="post" action="index.php">
    search<input type="text" name="item" placeholder"enter your search">
    <input type="submit" name="search" value="search">
  </form>
</div>
</body>
</html>
