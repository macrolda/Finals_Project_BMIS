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
    <title>Admin's LogIn</title>
    <link type="text/css" href="css/adminPortal_css3.css" rel="stylesheet">
</head>
<body>
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" name="residentLogInBtn" class="toggle-btn" onclick="logIn()" >Admin's Log-In</button>
        </div>
        <!---LogIn--->
        <form id="logIn"class="input-group">
            <input type="text" class="input-field" name="residentUsernameLogIn" placeholder="Username" required>
            <input type="password" class="input-field" name="residentPasswordLogIn" placeholder="Password" required>
            <button type="button" name="residentLogIn" class="submit-btn">Log-In</button>
        </form>

    </div> 
</body>
</html>   