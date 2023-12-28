<?php
    include 'connection.php';
    include 'includes/login.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <style>

        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .form-control {
            width: 300px; /* Set the desired width */

        }

        button {
            width: 30px; /* Set the desired width */
        }

    </style>
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control col-12" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control col-12" id="password" name="password" required>
            </div>


            <button class="btn btn-primary col-12" style="width: 100px;">Login</button>

            <div class="m-2">
                Don't have an account? <a href="signup.php">signup here</a>
            </div>
            
        </form>
            
    </div>
</body>
</html>