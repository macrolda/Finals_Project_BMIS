<?php
    session_start();
    require ("config.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Resident | Barangay Information</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/BarangayMap.css">
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
                <li class="active">
                    <a href="BarangayMap.php">Barangay Information</a>
                </li>
                <li  >
                    <a href="ResidentRequestCert.php">Document Request</a>
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
                </div>
                <h2 class="col-12" id="navHeader">Barangay Tabunok's Information</h2>
            </nav>


            <div class="container-fluid">
            <section>
                    <div class="student-profile py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                            <img class="profile_img" src="image/logo_1.png" alt="brgyLogo">
                                            <h3>Barangay Tabunok's Official Logo</h3>
                                        </div>
                                    <div class="card-body">
                                        <p class="mb-0">
                                            <strong class="pr-1">
                                                <b>Barangay Name:</b>
                                            </strong>
                                                    <h4 id="btgyName">Barangay Tabunok</h4>
                                        </p>

                                        <p class="mb-0">
                                            <strong class="pr-1">
                                                <b>Municipality:</b>
                                            </strong>
                                                <h4 id="btgyMuni">{{municipality}}</h4>
                                        </p>
                                        <p class="mb-0">
                                            <strong class="pr-1">
                                                <b>Province:</b>
                                            </strong>
                                            <h4 id="btgyProvince">{{province}}</h4>
                                        </p>
                                        <p class="mb-0">
                                            <strong class="pr-1">
                                                <b>Contact Number:</b>
                                            </strong>
                                            <h4 id="btgyNum">{{number}}</h4>
                                        </p>
                                        <p class="mb-0">
                                            <strong class="pr-1">
                                                <b>Email:</b>
                                            </strong>
                                            <h4 id="btgyEmail">{{email}}</h4>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card shadow-sm">
                                <div class="card-header bg-transparent border-0">
                                    <h2 class="mb-0"><i class="far fa-clone pr-1"></i>Barangay Map/Location</h2>
                                </div>
                                <div class="card-body pt-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15703.87331693718!2d123.83321282739236!3d10.264135432725087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99cffe8504c7d%3A0x813c9586130f9183!2sTabunok%2C%20Antuwanga%2C%20Talisay%2C%20Cebu!5e0!3m2!1sen!2sph!4v1639514215510!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                               
                            </div>
                        
                        </div>
                    </div>
                </section>
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
