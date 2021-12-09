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

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
                    <a href="AdminResidentRecords.php">Resident Records</a>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Document Records</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="CertificateTemplates/DocumentRecord_Clearance.php">Barangay Clearance</a>
                        </li>
                        <li>
                            <a href="CertificateTemplates/DocumentRecord_Permit.php">Barangay Permit</a>
                        </li>
                        <li>
                            <a href="CertificateTemplates/DocumentRecord_Residency.php">Certificate of Residency</a>
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
                <section>
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-4">
                                            <h2><b>Admin's Information</b></h2>
                                        </div>
                                        <div class="col-4">
                                            <div class="search-box">
                                                <i class="material-icons">&#xE8B6;</i>
                                                <input type="text" class="form-control" placeholder="Search&hellip;">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <a href="#addAdminModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Resident</span></a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="selectAll">
                                                    <label for="selectAll"></label>
                                                </span>
                                            </th>
                                            <th>Timestap</th>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Position</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                    <label for="checkbox1"></label>
                                                </span>
                                            </td>
                                            <th>{{time}}</th>
                                            <th>Maria Ailah</th>
                                            <th>Rolda</th>
                                            <th>Admin</th>
                                            <th>admin1</th>
                                            <th>admin1@gmail.com</th>
                                            <td>
                                                <a href="#editResidentModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                <a href="#deleteResidentModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                <a href="#viewResidentModal" class="view" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">&#xE417;</i></a>
                                            </td>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>        
                    </div>
                    
                    <!-- Add Modal HTML -->
                    <div id="addAdminModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Add Barangay Admin</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 form-group ">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-4 form-group ">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-4 form-group ">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>			
                                        <div class="col-12 form-group">
                                            <label>Birthday</label>
                                            <input  type="date" name="adminRegBirthday" class="form-control" id="adminRegBirthday" required>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label>Barangay Position</label>
                                            <input type="text" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-8 form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-success" value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Modal HTML -->
                    <div id="editResidentModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Edit Barangay Admin Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 form-group ">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-4 form-group ">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-4 form-group ">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>			
                                        <div class="col-12 form-group">
                                            <label>Birthday</label>
                                            <input  type="date" name="adminRegBirthday" class="form-control" id="adminRegBirthday" required>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label>Barangay Position</label>
                                            <input type="text" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-8 form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-info" data-dismiss="modal" value="Reset">
                                        <input type="submit" class="btn btn-success" value="Edit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Modal HTML -->
                    <div id="deleteResidentModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Delete Resident</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">					
                                        <p>Are you sure you want to delete these Records?</p>
                                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- View Modal HTML -->
                    <div id="viewResidentModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">						
                                        <h4 class="modal-title">View Barangay Admin Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 form-group ">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-4 form-group ">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-4 form-group ">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>			
                                        <div class="col-12 form-group">
                                            <label>Birthday</label>
                                            <input  type="date" name="adminRegBirthday" class="form-control" id="adminRegBirthday" required>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label>Barangay Position</label>
                                            <input type="text" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="col-8 form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Close">
                                    </div>
                                </form>
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
