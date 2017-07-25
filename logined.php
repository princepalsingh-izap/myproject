<?php
session_start();
$output='';
$item=$_POST['item'];
include "connection.php";
if(isset($_POST['search']))
 {
    if(!isset($_SESSION['email'])){
      header("location:login.php");
     }
     
      $item=preg_replace("#[^0-9a-z]#i","",$item);
      $query="SELECT * FROM data WHERE name LIKE '%$item%' or email LIKE '%$item%'";
      $result=mysql_query($query,$conn);
      $count=mysql_num_rows($result);
      if($count==0){
          $output='search not found';
      }else{
          $output .='<table align="center" cellpadding="2" cellspacing="2" border="1"';
          $output .='<tr><td>name</td><td>email</td></tr>';
          while($row=mysql_fetch_array($result)){
              $name=$row['name'];
              $email=$row['email'];
              $output.='<tr><td>'.$name.'</td><td>'.$email.'</td></tr>';
             
          }
           $output.='</table>';
      }
 
 }
 if(isset($_POST['logout']))
  {
    echo here;
     if(!isset($_SESSION['email'])){
       header("location:login.php");
     }
     unset($_SESSION['email']);
     header("location:index.php");
  }
?>
<html>
<head><title>you are now logined</title></head>
<body>
<h1 align="center"><a href="logined.php">Home</a></h1>
<div align="center">
<form method="post" action="logined.php">
    search<input type="text" name="item" placeholder"enter your search">
    <input type="submit" name="search" value="search">
  </form>
    </div>
    <div align="center"><form method="post" action="logined.php"> <input type="submit" name="logout" value="logout"></form></div> </body>
    <?php print $output;?>