<?php
$output='';
$item=$_POST['item'];
include "connection.php";
if(isset($_POST['search']))
 {
    if(!isset($_SESSION['email'])){
      header("location:login.php");
     }
     
 
 }
 ?>
 <head><title>home</title></head>
<center>
<h1>Welcome!</h1></center>
<div>
<table cellspacing="2" cellpadding="3" border="0" align="center">
<tr >
<td>
<button><a href="login.php">login</a></button></td>
<td>
<button><a href="signup.php">signup</a></button></center>
</td>
</tr>
</table>
<form align="center"method="post" action="index.php">
    search<input type="text" name="item" placeholder"enter your search">
    <input type="submit" name="search" value="search">
  </form>
</div>
