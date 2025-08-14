<?php
     ob_start();
     $servername="localhost:3307";
     $username="root";
    $password="";
    $database="tours4real";
    $conn = mysqli_connect($servername,$username,$password,$database);    
    if(!$conn)
    {
        die("Connection Failed");
    }
    session_start();
?>