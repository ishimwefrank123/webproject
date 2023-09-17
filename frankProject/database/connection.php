<?php

$conn=mysqli_connect('localhost','root','','OCEANUSS');

  if(!$conn)
  {
    die('Filed::'.mysqli_connect_error());
  }
echo"";