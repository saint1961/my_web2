<?php
    session_start();
    include 'connection.php';
    include 'includes/signup.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="style.css">
    
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
    </style>

</head>
<body>
    <form class="POST" onsubmit="return validateForm()">
        <div class="col-md-8 col-lg-4 border rounded mx-auto mt-5 p-4 shadow">
            <div class="h2">Signup</div>


        <div class="form-group">
            <label for="fullname">Full Name:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                </div>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
        </div>

        <div class="form-group">
            <label for="registration">Registration Number:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-123"></i></span>
                </div>
                <input type="text" class="form-control" id="registration" name="registration" pattern="BCS-\d{2}-\d{4}-\d{4}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="sex">Sex:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                </div>
                <select class="form-control" id="sex" name="sex" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <div class="form-group">
            <label for="region">Region:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-globe"></i></span>
                </div>
                <select class="form-control" id="region" name="region" onchange="getDistricts()" required>
                <option value="">Select a Region</option>"
                </select>
            </div>
        </div>


                <div class="form-group">
                    <label for="districts">Districts:</label>
                    <select class="form-control" id="districts" name="districts">
                    <option value="">Select a District</option>
                        </select>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxchimp/1.3.0/jquery.ajaxchimp.min.js"></script>

                    <script>
            function getDistricts() {
                var regionId = $("#region").val();

                $.ajax({
                    url: "get_districts.php", // PHP script to fetch districts based on the selected region
                    type: "POST",
                    data: { region_id: regionId },
                    success: function (data) {
                        $("#districts").html(data);
                    }
                });
            }

            // Initial load of regions
            $(document).ready(function () {
                $.ajax({
                    url: "get_regions.php", // PHP script to fetch regions
                    type: "GET",
                    success: function (data) {
                        $("#region").html(data);
                    }
                });
            });
        </script>



        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>

        <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                </div>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            </div>
        </div>

<!-- Add the following JavaScript code inside the <script> tag -->

<script>
    function validateForm() {
        // Get the values of the input fields
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        // Perform validation checks
        if (email === "") {
            alert("Please enter your email.");
            return false;
        }

        if (password === "") {
            alert("Please enter a password.");
            return false;
        }

        if (confirmPassword === "") {
            alert("Please confirm your password.");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        // If all validations pass, submit the form
        return true;
    }
</script>

<!-- Add the onsubmit attribute to the <form> tag -->
<form action="submit.php" method="POST" onsubmit="return validateForm()">
    <!-- Rest of the form code -->
    <!-- ... -->
    <button class="mt-3 btn btn-primary col-12">Signup</button>

<div class="m-2">
    Already have an account? <a href="login.php">login here</a>
</div>
</form>

</body>
</html>
