<?php
//setting up a database 
 $servername = 'localhost';
 $username = 'root';
 $password= '';
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE IF NOT EXISTS coursework";
  $conn->exec($sql);
  $sql = "USE coursework";
  $conn->exec($sql);
  echo "DB created successfully";
  //creating tables 
  $stmt=$conn->prepare("DROP TABLE IF EXISTS users;
  CREATE TABLE users (
  userid INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(30) NOT NULL, 
  role VARCHAR(1));");
  $stmt->EXECUTE();
  $stmt=$conn->prepare("DROP TABLE IF EXISTS subjects;
    CREATE TABLE subjects (
        subjectid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(40);");
$stmt->EXECUTE();

?>
