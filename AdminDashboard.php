<?php
    session_start();
    require ("config.php");
    include'AdminSidebar.php';
?>
<head>
    <title>Admin | Dashboard</title>
    <link type="text/css" href="css/AdminDashboard.css" rel="stylesheet">             
</head>
<body>
    
    <div class="row">
        <div class="col-md-3 "></div>

        <div class="col-md-auto mainPage" >
            <h3 style="text-align: center; margin-bottom: 30px; font-size: 30px">Clearance Page</h3>
            <! -- cards -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Resident Population</div>
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
            
            <h3 style="text-align: center; margin-top: 250px; font-size: 30px">{{BARANGAY OFFICIALS LIST TBA}}</h3>

        </div>


    </div>
</body>
