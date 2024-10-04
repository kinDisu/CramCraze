<?php
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM users WHERE email =:email ;" );
$stmt->bindParam(':email', $_POST['email']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    if($row['Password']== $_POST['Password']){
        session_start();
        $_SESSION["name"]=$row["name"];
        header('Location: resources.php');
    }else{

        header('Location: login.php');
    }
}
$conn=null;
?>
