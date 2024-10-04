
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

$Name = htmlspecialchars($_SESSION['name']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Resource Form</title>
</head>
<body>
<?php include 'bootstrapnav.php'; ?>
   
    <h1>Welcome, <?php echo $Name; ?></h1>
    <h2>Add Resource</h2>
    <form>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br><br>
        
        <label for="resourceLink">Resource Link:</label><br>
        <input type="text" id="resourceLink" name="resourceLink"><br><br>
       
        <label for="level">Level:</label><br>
        <select id="level" name="level">
            <option value="gcse">GCSE</option>
            <option value="alevel">A-Level</option>
        </select><br><br>
        
       

        <label for="format">Format:</label><br>
        <select id="format" name="format">
            <option value="pdf">PDF</option>
            <option value="docx">DOCX</option>
            <option value="url">URL</option>
            <option value="ppt">PPT</option>
        </select><br><br>
       
        <label for="difficulty">Difficulty:</label><br>
        <select id="difficulty" name="difficulty">
            <option value="easy">Easy</option>
            <option value="medium">Medium</option>
            <option value="hard">Hard</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
      
</body>
</html>