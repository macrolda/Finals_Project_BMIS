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
    <link type="text/css" href="css/dashboard_css4.css" rel="stylesheet">
    <script>
        function displayDate(){
            document.getElementById("showDate").innerHTML = Date();
        }
    </script>               
</head>

<body>
    <div class="container">
        <!-- START OF SIDE BAR -->
        <div class="navigation ">
            <ul>
                <li class="list ">
                    <a href="#">
                        
                        <span class="title">Barangay Name</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"><ion-icon>    
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"><ion-icon>    
                        </span>
                        <span class="title">Resident Records</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"><ion-icon>    
                        </span>
                        <span class="title">Blotter Records</span>
                    </a>
                </li>
            
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="calendar-outline"><ion-icon>    
                        </span>
                        <span class="title">Settlement Schedules</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="print-outline"><ion-icon>    
                        </span>
                        <span class="title">Certificate Records</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person"><ion-icon>    
                        </span>
                        <span class="title">Accounts</span>
                    </a>
                </li>
            
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"><ion-icon>    
                        </span>
                        <span class="title">Barangay Settings</span>
                    </a>
                </li>

                <div onload="displayDate()">
                    <p id='showDate' ></p>
                </div>
            </ul>
        </div>
        <!-- END OF SIDE BAR -->

        <!-- START OF MAIN BAR -->
        <div class="main">
            <div class="topbar">
                <div class="toggle"></div>
                <!-- search -->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- userImg -->
                <div class="user">
                    <img  src="image/default_img.png">
                </div>
            </div>

            <!-- cards -->
            <div class="cardBox">            
                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Total Population</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Registered Voters</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="receipt-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Male</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="man-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Female</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="woman-outline"></ion-icon>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!---SCRIPTS--->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    // add hovered class in selected list item
    let list = document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item) => item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item) => item.addEventListener('mouseover',activeLink));
</script>
<!---SCRIPTS--->
</body>
</html>