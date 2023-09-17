<?php
$con = mysqli_connect("localhost","root","","oceanus");

if(!$con){



    die('could not connect'.mysqli_error());
}


$sql="INSERT INTO customer(name,phone_number,address)
VALUES('$_POST[name]','$_POST[phone]','$_POST[address]');";
if($con->query($sql)===TRUE){

header("location: oceanuss.html");

}
else{

    echo "datab not entered".mysql_error();
}

?>