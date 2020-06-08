<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    if(isset($_POST["login"]))
    {
        if(!empty($_POST['user']) && !empty($_POST['pass']))
        {  
            $user=$_POST['user'];  
            $pass=$_POST['pass'];  
            
            $con=mysql_connect('localhost','root','') or die(mysql_error());  
            mysql_select_db('database') or die("cannot select DB");  
            
            $query=mysql_query("SELECT * FROM customer WHERE First_name='".$user."' AND c_password='".$pass."'");  
            $numrows=mysql_num_rows($query);
            if($numrows!=0)  
            {
                while($row=mysql_fetch_assoc($query))  
                {
                    $dbusername=$row['First_name'];
                    $dbpassword=$row['c_password'];
                }
                if($user == $dbusername && $pass == $dbpassword)  
                {  
                    session_start();  
                    $_SESSION['sess_user']=$user;  
                
                    /* Redirect browser */  
                    header("Location: 1HOME.html");  
                }
            }
            else
            {  
                echo "Invalid username or password! please try again";  
            }
        }
        else
        {  
            echo "All fields are required!";  
        }
    } 
    mysql_close($con);
?>