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
<title>Administrator | Log-In</title>
<link type="text/css" href="css/AdminPortalLogIn.css" rel="stylesheet">   
<script src="validation.js"></script>   
    
</head>
<body>
    <div class="login-wrapper">
        <form action="database.php" class="form" name="adminLogIn" >
            <img src="image\logo_1.png" alt="barangayLogo1">
            <h2>Administrator's Log-In</h2>
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

            <a href="AdminForgotPassword.php" class="forgot-pw">Forgot Password?</a>

            <input 
            type="submit"
            value="Login" 
            class="submit-btn" 
            onclick="location='AdminDashboard.php'">
            
            <hr size = 2 noshade color=white>

            <div class="registerTxt">
                <p>Don't have an account?</p>
            </div>

            <input 
            type="submit"
            value="Register Here" 
            class="btn reg-btn btn-warning btn-lg" 
            onClick="location.href='AdminRegister.php'"
            >
        </form>
    </div>
</body>
</html>   