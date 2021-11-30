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
        <form action="database.php" method="post" class="form" id="residentPortal" name="residentPortal">
            <img src="image\logo_1.png" alt="barangayLogo1">
            <h2>Resident's Log-In</h2>
            <div class="input-group">
                <input 
                type="text" 
                name="res_logIn_Username" 
                id="res_logIn_Username" 
                required>
                <label for="res_logIn_Username">User Name</label>
            </div>

            <div class="input-group">
                <input 
                type="password" 
                name="res_logIn_password" 
                id="res_logIn_password" 
                required>
                <label for="res_logIn_password">Password</label>
            </div>
            
            <a href="ResidentForgotPassword.php" class="forgot-pw">Forgot Password?</a>
            
            <input 
            type="submit"
            value="Login" 
            class="btn submit-btn btn-success" 
            onclick="loginValidation()"
            name="res_logIn">
            
            <hr size = 2 noshade color=white>

            <div class="registerTxt">
                <p>Don't have an account?</p>
            </div>

            <input 
            type="submit"
            value="Register Here" 
            class="btn reg-btn btn-warning btn-lg btn-block" 
            onClick="location.href='ResidentRegister.php'"
            >
            <!--onclick="loginValidation()"-->
        </form>
    </div>
</body>
</html>   