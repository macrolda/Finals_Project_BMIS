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
<title>Administrator | Register</title>
<link type="text/css" href="css/AdminRegister.css" rel="stylesheet">   
<script src="validation.js"></script>   
    
</head>
<body>
    <div class="login-wrapper">
        <form action="" class="form">
            <img src="image\logo_1.png" alt="barangayLogo1">
            <h2>Administrator's Registration</h2>
                <div class="col-12 input-group">
                    <input 
                    type="text" 
                    name="adminRegFirstName" 
                    id="adminRegFirstName" 
                    required>
                    <label for="loginUser">First Name</label>
                </div>
                <div class="input-group">
                    <input 
                    type="text" 
                    name="adminRegMiddleName" 
                    id="adminRegMiddleName" 
                    required>
                    <label for="loginUser">Middle Name</label>
                </div>

                <div class="input-group">
                    <input 
                    type="text" 
                    name="adminRegLastName" 
                    id="adminRegLastName" 
                    required>
                    <label for="loginUser">Last Name</label>
                </div>

                <div class="input-groupp">
                    
                    <input 
                    type="date" 
                    name="adminRegBirthday"
                    id="adminRegBirthday"
                    required>
                    <label for="loginUser">Birthday</label>
                </div>

                
                <div class="input-group">
                    <input 
                    type="text" 
                    name="adminRegLastName" 
                    id="adminRegLastName" 
                    required>
                    <label for="loginUser">Barangay Position</label>
                </div> 
                
                <div class="input-group">
                    <input 
                    type="text" 
                    name="adminRegUsername" 
                    id="adminRegUsername" 
                    required/>
                    <label for="loginUser">Username</label>
                </div>

                <div class="input-group">
                    <input 
                    type="email" 
                    name="adminRegLastName" 
                    id="adminRegLastName" 
                    required/>
                    <label for="loginUser">Email Address</label>
                </div>
                
                <input 
                type="submit"
                value="Register Account" 
                class="reg-btn" 
                onclick="location='AdminPortal_logIn.php'">
             
            </form>
        </div>
    </div>
</body>
</html>   