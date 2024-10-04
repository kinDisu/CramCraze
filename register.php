<?php

include_once "connection.php";
//removes all special characters to protect against sql injection
array_map("htmlspecialchars", $_POST);

print_r($_POST);
   

    // Hash the password
    $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Insert data into the users table
    $sql = "INSERT INTO users (name,email, role, password) 
            VALUES (:name,:email, :role, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST["name"]);
    $stmt->bindParam(':role', $_POST["role"]);
    $stmt->bindParam(':email', $_POST["email"]);
    $stmt->bindParam(':password', $hashed_password);
   
   
    
    $stmt->execute();
    echo "Registration successful. Welcome, " . $_POST["name"] . "! You can now sign in.";
    header('Location: loginuser.php');

?>