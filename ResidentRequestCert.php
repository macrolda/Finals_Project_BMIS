<?php
session_start();
include ("config.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Resident | Request Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ResidentRequestCert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="image/logo_1.png">
</head>

<body>
    <div class="wrapper">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <div class="user">
                    <img class="imgLogo" src="image/logo_1.png">
                </div>
            </div>

            <ul class="list-unstyled components">
                <p class="brgyTitle">Barangay Tabunok</p>

                <li>
                    <a href="ResidentDashboard.php">Dashboard</a>
                </li>

                <li>
                    <a href="ResidentProfile.php">Profile</a>
                </li>
                <li  class="active">
                    <a href="ResidentRequestCert.php">Document Request</a>
                </li>
                <li>
                    <a href="ResidentNotification.php">Notification</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <div  class="currentDayTime">
                        <p>Date/Time: <br><span id="datetime"></span></p>
                    </div>
                </li>
                <li>
                    <a href="index.php" class="download">Log-out</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn barBtn">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <h2 id="navHeader">Welcome to Barangay Tabunok</h2>
                </div>
            </nav>
            <br><br>
            <div class="row">
                <div class="card col-4" style="width: 18rem;">
                    <div class="card-body" onclick="location='CertificateTemplates/permit_print.php'">
                        <h5 class="card-title">Barangay Permit</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Barangay Tabunok's Barangay Permit</h6>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci voluptatem eius, unde accusantium sint praesentium perferendis, veniam, impedit cum maiores. Harum atque id totam placeat facilis dolorum quidem obcaecati.</p>
                        
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <div class="card-body" onclick="location='CertificateTemplates/residency_print.php'">
                        <h5 class="card-title">Certificate of Indigency</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Barangay Tabunok's Certificate of Residency</h6>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci voluptatem eius, unde accusantium sint praesentium perferendis, veniam, impedit cum maiores. Harum atque id totam placeat facilis dolorum quidem obcaecati.</p>
                        
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <div class="card-body" onclick="location='CertificateTemplates/clearance_print.php'">
                        <h5 class="card-title">Barangay Clearance</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Barangay Tabunok's Barangay Clearance</h6>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci voluptatem eius, unde accusantium sint praesentium perferendis, veniam, impedit cum maiores. Harum atque id totam placeat facilis dolorum quidem obcaecati.</p>
                        
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    
    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    <script>
        var x = new Date()
        var x1= x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear() + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
        document.getElementById('datetime').innerHTML = x1;
    </script>
</body>
</html>
