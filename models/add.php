<?php
    require '../controller/connect.php';
    //echo $_POST["city"];
    //echo $_POST["temp"];

    $city = $_POST["city"];
    $temp = $_POST["temp"];

    //echo $city;
    //echo $temp;

    $sql = "INSERT INTO weather_data (city, temp) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $city, $temp);
    $stmt->execute();

    $conn->close();


    header("Location: ../index.php");
?>