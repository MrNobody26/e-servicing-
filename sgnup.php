<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>e-servicing</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="just.css">
</head>
<body>

<div class="header">
  <div style="position: absolute; width: 240px; height: 96px; left: 35px; top: 11px;"><img src="logo.png" width="230" /></div>
  <h1>E-SERVICING & VEHICLE MANAGEMENT SYSTEM</h1>
  <p>A easy way to keep your vehicle healthy.</p>
</div>

<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About us</a>
  <div class="dropdown">
    <button class="dropbtn">Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="washing.html" >washing</a>
      <a href="advanceappointment.html">Service</a>
      <a href="index.html" >Spare parts</a>
    </div>
  </div>
  <a href="logn.html" class="right"> LOG IN</a>
</div>
<link href="sgnup.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>
    #msg {
    visibility: hidden;
    min-width: 250px;
    background-color:yellow;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    right: 30%;
    top: 30px;
    font-size: 17px;
	margin-right:30px;
}

.error {color: #FF0000;}

#msg.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 30px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 0;}
    to {top: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {top: 30px; opacity: 1;} 
    to {top: 0; opacity: 0;}
}

@keyframes fadeout {
    from {top: 30px; opacity: 1;}
    to {top: 0; opacity: 0;}
}
    </style>
</head>

<body>
<?php

/* $fname=$_POST["fname"];
$lname=$_POST["lname"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$email=$_POST["email"]; 
$pws=$_POST["pass"];
$pws1=$_POST["pass1"]; */
$server="localhost";
$user="root";
$pass="";
$database="database";
$nameErr = $lnameErr =  $dnameErr = $emailErr = $phoneErr = $passerr = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
  } else {
    
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $nameErr = "Only letters allowed";
    }
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Name is required";
  } else {
    
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters allowed";
    }
  }

 
  if (empty($_POST["address"])) {
    $dnameErr = "Name is required";
  } else {
   
    if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
      $dnameErr = "Only letters allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
 
 
  if (empty($_POST["phone"])) {
    $phoneErr = "Name is required";
  } else {
   
    if (!preg_match("/^[0-9]{10}+$/",$phone)) {
      $phoneErr = "Only numbers allowed";
    }

    if($_POST["pass"] == $_POST["pass1"] )
    { $passerr="";}
    else{
    $passerr=" password not same. please re-enter the password";}
  }



  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($phoneErr=="" && $lnameErr =="" && $emailErr =="" &&  $dnameErr ==""  &&  $nameErr ==""  &&  $passerr =="" ) 
{
$connection=mysql_connect($server,$user,$pass) or die("could not connect:".mysql_error());
mysql_select_db($database,$connection);
$query="INSERT INTO customer(First_name,last_name,c_contact,c_email,c_address,c_password) VALUES('$fname','$lname','$phone','$email','$address','$pws')";

$result=mysql_query($query,$connection) or die("error in querry:".$query."".mysql_error());
mysql_info($connection);
 header("Location: logn.html");  
mysql_close($connection);
}
?>

<div class="signup">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <h2 style="color: #fff;">Sign Up</h2>
    <input type="text" name="fname" placeholder="First name " required ><span class="error">* <?php echo $nameErr;?></span><br><br>
    <input type="text" name="lname" placeholder="Last name" required><span class="error">* <?php echo $lnameErr;?></span><br><br>
     <input type="text" name="phone" placeholder="Phone number" required><span class="error">* <?php echo $phoneErr;?></span><br><br>
    <input type="text" name="address" placeholder="Address" required><br><br><span class="error">* <?php echo  $dnameErr;?></span>
    <input type="text" placeholder="email" name="email" required><span class="error">* <?php echo $emailErr;?></span><br><br>
    <input type="password" name="pass" placeholder="Password" required><span class="error">* <?php echo $passerr;?></span><br><br>    
    <input type="password" name="pass1" placeholder="Confirm Password" required><br><br>   
      
    
    <input type="submit" value="Sign up" name="submit"><br><br>
        
       
    </form>
     

}

        Already have account?<a href="logn.html" style="text-decoration: none; font-family: 'Play', sans-serif; color: yellow;">&nbsp;Log In</a>
    </div>
    <div class="footer">
  <h2 style="color: white">Contact Us</h2>
   <!-- Add font awesome icons -->
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
</div>

</body>
</html>


</html>