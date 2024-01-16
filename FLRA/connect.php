<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "fintech";
  
try {
   
    $conn = mysqli_connect($host, $user, $pass, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
?>