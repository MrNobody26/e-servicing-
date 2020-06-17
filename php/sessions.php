<?php
    session_start();
    if($_SESSION != null) {
        header("Location: 1HOME.html");
        // $_SESSION[''];
        // $_SESSION[''];
    }
    else{
        header("Location: logn.html");
    }
?>