<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources | CramCraze</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: white;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .box {
            border: 2px solid red;
            border-radius: 10px;
            padding: 30px;
            background-color: white;
            color: red;
            font-size: 20px;
            font-weight: bold;
            margin: 20px;
            transition: all 0.3s ease;
        }
        .box:hover {
            background-color: red;
            color: white;
        }
        .edit-box {
            margin-top: 20px;
        }
        h1 {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php include 'bootstrapnav.php'; ?>

    <div class="container">
        <h1>Resources</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="box">Practice</div>
            </div>
            <div class="col-md-4">
                <div class="box">Revise</div>
            </div>
            <div class="col-md-4">
                <div 
                 class="box">
                 <a href="edit.php">Edit</a>

              </div>
            </div>
            <div class="col-md-4">
                <div class="box">MyResources</div>
            </div>
        </div>
    </div>


</body>

</html>
