<?php
    
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";

    $connect = mysqli_connect($servername,$username,$password,$dbname);

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
      }


?>