<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CramCraze</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="bg-white">

    <!-- Bootstrap Navigation -->
    <?php include 'bootstrapnav.php'; ?>

    <div class="container">
        <h1 class="text-center text-danger">Login</h1>
        <form method="post" action="login.php" class="form-horizontal well bg-white text-danger">
            <div class="form-group">
                <label for="email" class="control-label col-sm-4">Email:</label>
                <div class="col-sm-8">
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-sm-4">Password:</label>
                <div class="col-sm-8">
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <input type="submit" class="btn btn-danger btn-block" value="Login">
                </div>
            </div>
        </form>
    </div>

    <!-- jQuery and Bootstrap JS for interactive functionality -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
