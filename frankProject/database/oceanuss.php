<?php

$conn=mysqli_connect('localhost','root','','');

  if(!$conn)
  {
    die('Filed::'.mysqli_connect_error());
  }

//create database
$db="CREATE DATABASE OCEANUSS";
//commit to your localhost
$binding=mysqli_query($conn,$db);
if($binding)
{
  echo"database well created!!";
}
else{
  echo"Database error->".mysqli_error($conn);
}