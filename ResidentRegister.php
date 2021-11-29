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
        <form 
        action="" 
        class="form" 
        name="res_register" 
        id="res_register" 
        onsubmit="return regValidation()">

            <img class = "brgyImg"src="image\logo_1.png" alt="barangayLogo1">
            <h2>Resident's Registration</h2>

            <label><h3 class="infoTitle">Personal Information</h3></label>
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <div class="col-xs-6 input-group">
                            <input 
                            type="text" 
                            name="loginUser" 
                            id="loginUser" 
                            required>
                            <label for="loginUser">User Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 input-group">
                            <input 
                            type="text" 
                            name="loginUser" 
                            id="loginUser" 
                            required>
                            <label for="loginUser">User Name</label>
                        </div>
                    </div>
                </div>
            </div>
            
    
            <input 
            type="submit"
            value="Register" 
            class="submit-btn" 
            onclick="regValidation()">
        </form>
    </div>
</body>
</html>   