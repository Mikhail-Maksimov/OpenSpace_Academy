<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    // Check if connected
    if ($connection->connect_error) {
        die("Connection failed..." . $connection->connect_error);
    }
?>