<?php 
    session_start();
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "tours4real";  
    $conn = mysqli_connect($servername, $username, $password, $db_name);
    if(!$conn){
        die("Connection failed");
    }
    ?>