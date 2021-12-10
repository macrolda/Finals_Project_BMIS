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
        <form action="database.php" method="post" class="form" id="admin_registrationForm" name="admin_registrationForm" onsubmit="return regAdminValidation()">
            <img src="image\logo_1.png" alt="barangayLogo1">
            <h2>Administrator's Registration</h2>
                <div class="col-12 input-group">
                    <input 
                    type="text" 
                    name="adminRegFirstName" 
                    id="adminRegFirstName" 
                    required>
                    <label for="adminRegFirstName">First Name</label>
                </div>
                <div class="input-group">
                    <input 
                    type="text" 
                    name="adminRegMiddleName" 
                    id="adminRegMiddleName" 
                    required>
                    <label for="adminRegMiddleName">Middle Name</label>
                </div>

                <div class="input-group">
                    <input 
                    type="text" 
                    name="adminRegLastName" 
                    id="adminRegLastName" 
                    required>
                    <label for="adminRegLastName">Last Name</label>
                </div>

                <div class="input-groupp">
                    
                    <input 
                    type="date" 
                    name="adminRegBirthday"
                    id="adminRegBirthday"
                    required>
                    <label for="adminRegBirthday">Birthday</label>
                </div>

                
                <div class="input-group">
                    <input 
                    type="text" 
                    name="adminRegPosition" 
                    id="adminRegPosition" 
                    required>
                    <label for="adminRegPosition">Barangay Position</label>
                </div> 
                
                <div class="input-group">
                    <input 
                    type="text" 
                    name="adminRegUsername" 
                    id="adminRegUsername" 
                    required/>
                    <label for="adminRegUsername">Username</label>
                </div>

                <div class="input-group">
                    <input 
                    type="email" 
                    name="adminRegEmail" 
                    id="adminRegEmail" 
                    required/>
                    <label for="adminRegEmail">Email Address</label>
                </div>
                
                <button
                type="submit" 
                class="reg-btn" 
                name="btn_adminRegister"
                id= "btn_adminRegister"
                >REGISTER ACCOUNT</button>
             
            </form>
        </div>
    </div>
</body>
</html>   