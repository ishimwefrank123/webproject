<?php
session_start();

include('includes/signupheaders.php');
?>
   <form  action="" method="post" name='form'onsubmit="formValidation()">
   <font color="yellow"> SIGN UP ON OUR WEBSITE</font><br>
   <div class="form">
   NAME: <input type="text" id="name" name="name" placeholder="ENTER YOUR NAME" >
   <p id="enterName"><span>Name is requiredd!!!</span></p>
  Email: <input type="text" id="email" name="email" placeholder="ENTER YOUR email" >

   PHONE NUMBER: <input id="number" type="text" name="phone"placeholder="ENTER YOUR PHONE NUMBER" >

   ADDRESS:<input type="text" id="address" name="address"placeholder="ENTER YOUR LOCATION" >
   Password: <input type="text" id="password" name="password" placeholder="ENTER YOUR password" >
   password-repeat: <input type="text" id="passwordrepeat" name="passwordrepeat" placeholder="ENTER YOUR password-repeat" >


<input type="submit" class="submit" name='frank' value="SIGNUP">

<?php
include('database/signupuccess.php');

include('includes/signupfooter.php');
?>