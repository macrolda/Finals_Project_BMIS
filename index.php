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
<title>Brgy. Tabunok | Portal
</title>
<link type="text/css" href="css/index.css" rel="stylesheet">
<script src="validation.js"></script>

</head>
<body>
    <!--<img src="image/logo_1.png" alt="barangay_logo_1">-->
    <h1 id="headerTitle">Barangay Tabunok</h1>

    <div class="container">

        <div class="card">
            <div class="box">
                <div class="content" onclick="location='ResidentPortal_logIn.php'">
                    <h2>01</h2>
                    <h3>Resident's Portal</h3>
                    <p>Barangay Tabunok's Resident Log-In/Registration</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content" onclick="location='AdminPortal_logIn.php'">
                    <h2>02</h2>
                    <h3>Admin's Portal</h3>
                    <p>Barangay Tabunok's Admin Log-In</p>
                </div>
            </div>
        </div>
        
    </div> 
</body>
</html>   