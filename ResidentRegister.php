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
<link rel="icon" type="image/png" sizes="32x32" href="image/logo_1.png">
<title>Resident | Register</title>
<link type="text/css" href="css/ResidentRegister.css" rel="stylesheet">
<script src="validation.js"></script>

</head>
<body>
    <div class="login-wrapper">
        <form action="" class="form" name="res_register" id="res_register" onsubmit="return regValidation()">
            <img src="image\logo_1.png" alt="barangayLogo1">
            <h2>Resident's Registration</h2>
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
                type="email" 
                name="res_registerEmail" 
                id="res_registerEmail" 
                required>
                <label for="emailUser">Email</label>
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
            value="Register" 
            class="submit-btn" 
            onclick="regValidation()">
        </form>

        <div id="forgot-pw">
            <form action="" class="form" name="res_forgotPassword" id="res_forgotPassword" onsubmit="return forgotPassValidation()">
                <a href="#" class="close">&times;</a>
                <h2>Reset Password</h2>
                <div class="input-group">
                    <input type="email" name="res_email" id="res_email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="res_newPassword" id="res_newPassword" required>
                    <label for="newPassword">Password</label>
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