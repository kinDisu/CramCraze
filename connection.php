<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'coursework';


    // Create a new PDO instance to connect to the MySQL database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>