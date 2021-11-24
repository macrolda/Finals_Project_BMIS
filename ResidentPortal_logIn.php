<?php
session_start();
require ("config.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="image/logo_1.png">
<head>
    <title>Resident's LogIn/Registration</title>
    <link type="text/css" href="css/ResidentPortalLogIn.css" rel="stylesheet">
</head>
<body>
<div class="login-wrapper">
        <form action="" class="form">
            <img src="image\logo_1.png" alt="barangayLogo1">
            <h2>Resident's Log-In</h2>
            <div class="input-group">
                <input 
                type="text" 
                name="loginUser" 
                id="loginUser" 
                required>
                <label for="loginUser">User Name</label>
            </div>

            <div class="input-group">
                <input 
                type="password" 
                name="loginPassword" 
                id="loginPassword" 
                required>
                <label for="loginPassword">Password</label>
            </div>

            <input 
            type="submit"
            value="Login" 
            class="submit-btn" 
            onclick="location='dashboard.php'">
            
            <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
        </form>

        <div id="forgot-pw">
            <form action="" class="form">
                <a href="#" class="close">&times;</a>
                <h2>Reset Password</h2>
                <div class="input-group">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="newPassword" id="newPassword" required>
                    <label for="newPassword">Password</label>
                </div>
                <div class="input-group">
                    <input type="password" name="confirmPassword" id="confirmPassword" required>
                    <label for="confirmPassword">Confirm Password</label>
                </div>
                <input type="submit" value="Submit" class="submit-btn">
            </form>
        </div>
    </div>
</body>
</html>   