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

    <title>Admin | Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/AdminDashboard.css">
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

                <li class="active">
                    <a href="AdminDashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="BarangayMap.php">Barangay Information</a>
                </li>
                <li>
                    <a href="AdminResidentRecords.php">Resident Records</a>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Document Records</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Barangay Clearance</a>
                        </li>
                        <li>
                            <a href="#">Barangay Permit</a>
                        </li>
                        <li>
                            <a href="#">Certificate of Residency</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="CertificateTemplates/DocumentRequest.php">Document Request</a>
                </li>
                <li>
                    <a href="AdminBarangaySettings.php">Barangay Settings</a>
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
                    <h2 id="navHeader">Barangay Tabunok's Dashboard</h2>
                </div>
            </nav>

            <div class="container-fluid">
                <section>
                    <div class="row">
                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card l-bg-orange-dark">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-md-1">
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <i class="fas fa-user-friends text-light fa-3x me-4"></i>
                                            </div>
                                            <div class="cardTitle">
                                                <h4>Total Population</h4>
                                                <p class="mb-0">Count of Registered Residents</p>
                                            </div>
                                        </div>
                                            <div class="align-self-center">
                                            <h2 class="h1 mb-0">{#}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card l-bg-green-dark">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-md-1">
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">    
                                                <i class="fas fa-file-alt text-light fa-3x me-4"></i>
                                            </div>
                                            <div class="cardTitle">
                                                <h4>Registered Voter</h4>
                                                <p class="mb-0">Count of Registered Voters</p>
                                            </div>
                                        </div>
                                        <div class="align-self-center">
                                            <h2 class="h1 mb-0">{#}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card l-bg-blue-dark">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-md-1">
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <i class="fas fa-male text-light fa-3x me-4"></i>
                                            </div>
                                            <div class="cardTitle">
                                                <h4>Total Male</h4>
                                                <p class="mb-0">Count of Male Residents</p>
                                             </div>
                                        </div>
                                        <div class="align-self-center">
                                            <h2 class="h1 mb-0">{#}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card l-bg-cherry">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-md-1">
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <i class="fas fa-female text-light fa-3x me-4"></i>
                                            </div>
                                            <div class="cardTitle">
                                                <h4>Total Female</h4>
                                                <p class="mb-0">Count of Female Residents</p>
                                            </div>
                                        </div>
                                        <div class="align-self-center">
                                            <h2 class="h1 mb-0">{#}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <div id="wrapper">
                <div id="container">

                    <ol class="organizational-chart">
                        <li>
                            <div>
                                <h1>Punong Barangay</h1>
                            </div>
                            <ol>
                                <li>
                                    <div>
                                        <h2>Barangay Secretary</h2>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h2>Barangay Treasurer</h2>
                                    </div>
                                </li>
                                
                            </ol>
                            <ol>
                                <li>
                                    <div>
                                        <h2>Committee on Health & Sanitation</h2>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h2>Committee on Peace & Order</h2>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h2>Committee on Trade & Industry</h2>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h2>Committee on Womens & Education</h2>
                                    </div>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <div>
                                        <h2>Committee on Clean and Green</h2>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h2>Committee on Appropriations</h2>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h2>Committee on Infrastructure</h2>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h2>SK Chairman</h2>
                                    </div>
                                </li>
                            </ol>
                        </li>                
                    </ol>

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
