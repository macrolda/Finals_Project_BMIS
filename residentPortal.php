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
<link rel="icon" type="image/png" sizes="32x32" href="image/Barangay Logo_BMIS_2.png">
<head>
    <title>Resident's LogIn/Registration</title>
    <link type="text/css" href="css/residentPortal_css2.css" rel="stylesheet">
</head>
<body>
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" name="residentLogInBtn" class="toggle-btn" onclick="logIn()">Log-In</button>
            <button type="button" name="residentRegisterBtn" class="toggle-btn" onclick="register()">Register</button>
        </div>

        <!---LogIn--->
        <form id="logIn"class="input-group">
           <!--- <h1>Log-In</h1>
            <p class="welcomeBack">Welcome! Sign in to start your session</p>--->

            <input 
            type="text" 
            class="input-field" 
            name="residentUsernameLogIn" 
            placeholder="Username"
            required>
                
            <input 
            type="password" 
            class="input-field" 
            name="residentPasswordLogIn" 
            placeholder="Password"
            required>

            <button 
            type="button" 
            name="residentLogIn" 
            class="submit-btn"
            onclick="location='dashboard.php'">Log-In
            </button>
            
        </form>

        <!---Registration--->
        <form id="register" class="input-group">
            <input 
            type="text" 
            class="input-field"
            name="residentUsernameRegistration" 
            placeholder="Username">
            <input 
            type="email" 
            class="input-field" 
            name="residentEmailRegistration" 
            placeholder="Email">
            <input 
            type="password" 
            class="input-field" 
            name="residentPasswordRegistration"
            placeholder="Password">
            <input 
            type="password"
            class="input-field"
            name="residentConfirmPasswordRegistration" 
            placeholder="Confirm Password">
            <button 
            type="button" 
            name="residentRegister" 
            onclick="location='dashboard.php'"
            class="submit-btn">Register Account</button>
        </form>
    </div> 
    <script>
        var x = document.getElementById("logIn");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register()
        {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        
        function logIn()
        {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>   