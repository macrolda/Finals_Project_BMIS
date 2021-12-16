<?php
    session_start();
    include_once ("config.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin | Barangay Clearance</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/AdminBarangayClearance.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="validation.js" type="text/javascript"></script>
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
                    <a href="AdminDashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="AdminResidentRecords.php">Resident Records</a>
                </li>

                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Document Records</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="AdminBarangayClearance.php">Barangay Clearance</a>
                        </li>
                        <li>
                            <a href="AdminResidencyCertificate.php">Certificate of Residency</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="AdminBarangaySettings.php">Barangay Settings</a>
                </li>
                <li>
                    <a href="logs.php">Barangay Logs</a>
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
                <h2 class="col-12" id="navHeader">Barangay Clearance</h2>
            </nav>

            <div class="container-fluid">
                <section>
                    <form action="database.php" method="post">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-4">
                                            <h2><b>Barangay Clearance</b></h2>
                                        </div>
                                        <div class="col-8">
                                            <div class="search-box">
                                                <i class="material-icons">&#xE8B6;</i>
                                                <input type="text" class="form-control" placeholder="Search&hellip;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>LastName</th>
                                            <th>FirstName</th>
                                            <th>MiddleName</th>
                                            <th>ResidentID</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include_once("config.php");
                                        $getResi = "SELECT * FROM resident_info";
                                        $result = mysqli_query($conn, $getResi);
                                        if (mysqli_num_rows($result) > 0) {
                                        while ($resident = mysqli_fetch_assoc($result)) 
                                        {
                                            $lastName = $resident['res_lastName'];
                                            $firstName = $resident['res_firstaName'];
                                            $middleName = $resident['res_middleName'];
                                            echo "<tr>"
                                            . "<td>" . $resident['res_lastName']
                                            . "</td><td>" . $resident['res_firstaName']
                                            . "</td><td>" . $resident['res_middleName']
                                            . "</td><td>" . $resident['user_id']
                                            . "</td><td>
                                            <button  data-toggle='modal' data-target='#editEmployeeModal' name='btnCreateClearance' type='submit' value=" . $resident['user_id'] . " class='btn btn-success text-dark bg-gradient fa fa-eye'>
                                           </button></td>"
                                            . "</tr>";
                                        }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>      
                    </div>
                    <!-- print Modal HTML -->
                    <div id="editEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Barangay Clearance</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 form-group ">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                                <div class="col-4 form-group ">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-4 form-group ">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>			
                                        <div class="col-12 form-group">
                                            <label>Barangay Clearance Purpose</label>
                                            <input type="text" id="purpose" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6 form-group">
                                                    <label>OR Number</label>
                                                    <input type="number" id="inputORNum" class="form-control" required>
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label>OR Date Issued</label>
                                                    <input type="date" id="inputORDate" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6 form-group">
                                                    <label>Cedulla Number</label>
                                                    <input type="number" id="inputCedullaNum" class="form-control" required>
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label>Cedulla Date Issued</label>
                                                    <input type="date" id="inputCedullaDate" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input onClick="location.href='CertificateTemplates/BarangayClearance.php'" type="submit" class="btn btn-success" value="Print Document">
                                        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>  
                    
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
