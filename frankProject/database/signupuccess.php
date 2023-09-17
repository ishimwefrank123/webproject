<?php

include('database/connection.php');


if(isset($_POST['frank']))
{
  if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['address']))
  {
    die("<h4 style='color:red;'> Either one of the field above is empty</h4>");
  }
  if(!is_numeric($_POST['phone']))
  {
    die("<h4 style='color:red;'> phone must be numbers</h4>");

  }
  if(strlen($_POST['phone'])<12)
  {
    die("<h4 style='color:red;'> invalid phone number</h4>");

  }
  $sign='/[+]/';
  if(!preg_match($sign,$_POST['phone']))
  {
    echo"<h4 style='color:red;'> phone number start by +</h4>";
 
  }
  
if($_POST['password']!=$_POST['passwordrepeat'])
{
  ECHO("<h4 style='color:red;'> Password dont match</h4>");
return false;

}
  /*if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
  {
    echo"<h4 style='color:red;'> Invalid email</h4>";
  
  }*/
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=password_hash($_POST['password'],PASSWORD_BCRYPT);
$passwordrepeat=$_POST['passwordrepeat'];
$_SESSION['password']=$password;

  //inserting in database
  $select="SELECT * FROM CUSTOMER WHERE EMAIL='$email'";

  $result=mysqli_query($conn,$select);
  if(mysqli_num_rows($result)>0)
  {
    die("<h4 style='color:red;'> your email already used</h4>");
  }
  else{
    $query="INSERT into CUSTOMER(NAME,EMAIL,PHONE,ADDRESS,PASSWORD) VALUES ('$name','$email','$phone','$address','$password')";
    if(mysqli_query($conn,$query))
    {

      header("location:loginseller.php");

    }
 
  }
  
}
