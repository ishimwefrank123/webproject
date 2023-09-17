<?php
include('database/connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginbuyers.css">
    <title>Document</title>
</head>
<body>
    <pre>
        <div class="log">
        <form action="" method="POST">
       
        Email: <input type="email"  name='email' style="border-radius: 10px;"><br>
        Password: <input type="password"  name='password' style="border-radius: 10px;">
      <input type="submit"value="LOGIN" name='login'  style="border-radius: 10px;">
    </pre> 
</form>
    
    <a href="oceanuss.html">back</a>
</body>
</html>
<?php
if(isset($_POST['login'])){
$email=$_POST['email'];
$pass=$_POST['password'];
$_SESSION['user']=$email;

  $select="SELECT * FROM CUSTOMER WHERE EMAIL='$email'";
  //$pass="SELECT PASSWORD FROM CUSTOMER WHERE EMAIL='$email'";

 
  $result=mysqli_query($conn,$select);
  if(mysqli_num_rows($result)>0 )
  {
   
header('location:selleraccount.php');
  }

}
?>