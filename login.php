<?php
    require "config.php";
    if(isset($_POST["login"]))
    {
        if(!empty($_POST['user']) && !empty($_POST['pass']))
        {  
            $user=$_POST['user'];  
            $pass=$_POST['pass'];  
            $sql = "SELECT * FROM customer where First_name=$user AND c_password=$pass";
            // $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $q = $pdo->prepare($sql);
            // $q->excute();
            // $result = $q->setFetchMode(PDO::FETCH_ASSOC);
            // $numrows = $q->fetchColumn();
            // $numrows = $q->rowCount();
            $con=mysqli_connect('localhost','root','','database') or die(mysqli_error());  
            $query=mysqli_query($con, $sql);
            // $numrows=mysql_num_rows($query);
            echo $query;
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $dbusername=$row['First_name'];
                    $dbpassword=$row['c_password'];
                    if($user == $dbusername && $pass == $dbpassword){
                        session_start();
                        $_SESSION['sess_user']=$user;
                    
                        /* Redirect browser */  
                        header("Location: 1HOME.html");  
                    }
                }
                echo $numrows;
            }else{echo "Invalid username or password! please try again";}
        }
        else{echo "All fields are required!";}
    } 
    mysqli_close($con);
?>