<?php
session_start();
require ("config.php");
?>


<!DOCTYPE HTML>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<head>
    <title>Administrator's LogIn</title>
    <link type="text/css" href="css/adminPortal_css3.css" rel="stylesheet">
</head>
<body>
    <div class="login-wrapper">    
        <form action="" class="form">
            <img src="image\Barangay Logo_BMIS_2.png" alt="barangayLogo1">
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

            <input 
            type="submit"
            value="Login"
            class="submit-btn"
            onclick="location='dashboard.php'">

        </form>
    </div>
</body>
</html>   