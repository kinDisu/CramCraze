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
password VARCHAR(200) NOT NULL, 
role VARCHAR(1));");
$stmt->EXECUTE();
//create subject table
$stmt=$conn->prepare("DROP TABLE IF EXISTS subjects;
CREATE TABLE subjects (
subjectid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(40));");
$stmt->EXECUTE();
//create table resources
$stmt=$conn->prepare("DROP TABLE IF EXISTS resources;
CREATE TABLE resources(
userid INT(8),
subjectid INT(6),
Level VARCHAR(20) NOT NULL,
age VARCHAR(6) NOT NULL,
PRIMARY KEY (userid,subjectid));");
$stmt->EXECUTE();
//create table type
$stmt=$conn->prepare("DROP TABLE IF EXISTS type;
CREATE TABLE type(
typeid INT(8) AUTO_INCREMENT PRIMARY KEY,
format VARCHAR(10));");
$stmt->EXECUTE();
//create table post
$stmt=$conn->prepare("DROP TABLE IF EXISTS post;
CREATE TABLE post(
postid INT(8) AUTO_INCREMENT PRIMARY KEY, 
question VARCHAR(100) NOT NULL,
postdate datetime DEFAULT current_timestamp,
status VARCHAR(200)NOT NULL);");
$stmt->EXECUTE(); 
//create table comment
$stmt=$conn->prepare("DROP TABLE IF EXISTS comment;
CREATE TABLE comment(
postid INT(8), 
userid INT(8),
subjectid INT(8),
comment VARCHAR(500), 
commentdate datetime DEFAULT current_timestamp,
PRIMARY KEY(postid,userid,subjectid));");
$stmt->EXECUTE(); 

?>
