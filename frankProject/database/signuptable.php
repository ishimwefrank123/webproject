<?php
$conn =mysqli_connect('localhost','root','','oceanuss');
if(!$conn==true)
{
  die("Failed::".mysqli_error($conn));
}
//create table
$sql="CREATE TABLE CUSTOMER (ID INT(10) PRIMARY KEY AUTO_INCREMENT,NAME TEXT(50),
PHONE INT(15) ,EMAIL VARCHAR(125),ADDRESS VARCHAR(25),PASSWORD VARCHAR(255))";
if(mysqli_query($conn,$sql))
{
  echo'table success';
}
else{
  echo"Bad done::".mysqli_connect_error();
}
