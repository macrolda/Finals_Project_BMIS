<?php
session_start();
require ("config.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="image/logo_1.png">
<title>Resident | Log-In</title>
<link type="text/css" href="css/ResidentPortalLogIn.css" rel="stylesheet">
<script src="validation.js"></script>

</head>
<body>
<div class="login-wrapper">
        <form action="ResidentDashboard.php" method="post" class="form" id="residentPortal" name="residentPortal">
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
            
            <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
            
            <input 
            type="submit"
            value="Login" 
            class="submit-btn" 
            onclick="loginValidation()">
            
            <hr size = 2 noshade color=white>

            <div class="registerTxt">
                <p>Don't have an account? <a href="ResidentRegister.php">Register here</a></p>
            </div>

            

        </form>

        <div id="forgot-pw">
            <form action="" class="form" id="res_forgotPassword" name="res_forgotPassword" onsubmit="return forgotPassValidation()">
                <a href="#" class="close">&times;</a>
                <h2>Reset Password</h2>
                <div class="input-group">
                    <input type="email" name="res_email" id="res_email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="res_newPassword" id="res_newPassword" required>
                    <label for="newPassword">New Password</label>
                </div>
                <div class="input-group">
                    <input type="password" name="res_confirmPassword" id="res_confirmPassword" required>
                    <label for="confirmPassword">Confirm Password</label>
                </div>
                <input type="submit" value="Submit" class="submit-btn">
            </form>
        </div>
    </div>
</body>
</html>   