<?php
    //add your server credentials here
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "weather";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>