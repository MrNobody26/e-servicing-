
<?php

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$email=$_POST["email"];
$pws=$_POST["pass"];
$server="localhost";
$user="root";
$pass="";
$database="database";

$connection=mysql_connect($server,$user,$pass) or die("could not connect:".mysql_error());
mysql_select_db($database,$connection);
$query="INSERT INTO customer(First_name,last_name,c_contact,c_email,c_address,c_password) VALUES('$fname','$lname','$phone','$email','$address','$pws')";

$result=mysql_query($query,$connection) or die("error in querry:".$query."".mysql_error());
mysql_info($connection);
 header("Location: cardetails.html");  
mysql_close($connection);

?>
 