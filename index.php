<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | FutureFunds</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script>
        function validateForm() {
            const name = document.getElementById("name").value;

            // Check if the name contains a space
            if (name.includes(" ")) {
                alert("Please enter only your first name without any spaces.");
                return false; // Prevent the form submitting
            }

            return true; // Allow form submission
        }
    </script>
</head>

<body class="bg-white">

    <!-- Bootstrap Navigation -->
    <?php include 'bootstrapnav.php'; ?>

    <div class="container">
        <h1 class="text-center text-danger">Registration Form</h1>
        <p class="text-center text-muted">Please fill out this form with the required information</p>
        <form method="post" action="register.php" onsubmit="return validateForm()" class="form-horizontal well text-danger bg-white">
            <div class="form-group">
                <label for="name" class="control-label col-sm-4">Enter Your First Name:</label>
                <div class="col-sm-8">
                    <input id="name" name="name" type="text" class="form-control" required />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-sm-4">Enter Your Email:</label>
                <div class="col-sm-8">
                    <input id="email" name="email" type="email" class="form-control" required />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-sm-4">Create a New Password:</label>
                <div class="col-sm-8">
                    <input id="password" name="password" type="password" class="form-control" required />
                </div>
            </div>
            <div class="form-group">
                <label for="role" class="control-label col-sm-4">Select Your Role:</label>
                <div class="col-sm-8">
                    <select id="role" name="role" class="form-control" required>
                        <option value="">-- Select --</option>
                        <option value="T">Teacher</option>
                        <option value="S">Student</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-danger btn-block">Register</button>
                </div>
            </div>
        </form>
        <div class="text-center">
            <button class="btn btn-link text-danger" onclick="window.location.href='loginuser.php'">Already have an account? Login here</button>
        </div>
    </div>
<!-- <--this is for dynamic features and aesthetics --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
