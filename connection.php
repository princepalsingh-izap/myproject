<?php
//change second and third field for username and password
$conn= mysql_connect('localhost','prince','prince') or die("Could not connect database");
if($conn){
    //change first field to select your database
    $db=mysql_select_db('prince',$conn);
}