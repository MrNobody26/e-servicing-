<?php
    $server="localhost";
    $host=$server;
    $user="root";
    $username=$user;
    $pass="";
    $password=$pass;
    $database="database";
    $dbname=$database;
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn = $pdo;
?>