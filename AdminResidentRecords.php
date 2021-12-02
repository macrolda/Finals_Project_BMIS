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

    <title>Admin | Resident Records</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/AdminResidentRecords.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

                <li  class="active">
                    <a href="#">Resident Records</a>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Document Records</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Barangay Permit</a>
                        </li>
                        <li>
                            <a href="#">Certificate of Residency</a>
                        </li>
                        <li>
                            <a href="#">Barangay Clearance</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Document Request</a>
                </li>
                <li>
                    <a href="#">Barangay Settings</a>
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn barBtn">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <h2 id="navHeader">Barangay Tabunok's Resident Records</h2>
                </div>
            </nav>
            <div class="container">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-4">
                                    <h2>Resident's <b>Information</b></h2>
                                </div>
                                <div class="col-4">
                                    <div class="search-box">
                                        <i class="material-icons">&#xE8B6;</i>
                                        <input type="text" class="form-control" placeholder="Search&hellip;">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <a href="#addResidentModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Resident</span></a>
                                    <a href="#deleteResidentModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
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
                                    <th>Resident Number</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Voter Status</th>
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
                                    <th>12345678901</th>
                                    <th>Maria Ailah</th>
                                    <th>Confiado</th>
                                    <th>Rolda</th>
                                    <th>21</th>
                                    <th>Female</th>
                                    <th>Yes</th>
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
            <div id="addResidentModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">						
                                <h4 class="modal-title">Add Resident</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home">

                                            <label><h3 class="infoTitle">Personal Information</h3></label>
                                            <hr size = 3 noshade color=black>
                                        <div class="row">
                                            <div class="col-3 inputTitle">
                                                <div class="text-center">
                                                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="user_image">
                                                    <h6>Upload a photo or use your camera</h6>
                                                    <input type="file" class="text-center center-block file-upload upload_image">
                                                </div>
                                            </div>

                                            
                                        <div class="col-9">
                                                    <div class="form-group">    
                                                        <div class="row">
                                                            <div class="col-4 inputTitle">
                                                                <label><h4>First Name</h4></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control"
                                                                    name="res_regfirstname" 
                                                                    id="res_regfirstname" 
                                                                    placeholder="First Name"
                                                                    required/>
                                                            </div>

                                                            <div class="col-4 inputTitle">
                                                            <label><h4>Middle Name</h4></label><br>
                                                                <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="res_regmiddleName" 
                                                                id="res_regmiddleName" 
                                                                placeholder="Middle Name"
                                                                required/>
                                                            </div>

                                                            <div class="col-4 inputTitle">
                                                            <label><h4>Last Name</h4></label><br>
                                                                <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="res_reglastname" 
                                                                id="res_reglastname" 
                                                                placeholder="Last Name"
                                                                required/>
                                                            </div>

                                                            <div class="col-3 inputTitle">
                                                                <label><h4>Birth Month</h4></label><br>
                                                                <select id="res_regbirthMonth" class="form-control" name="res_regbirthMonth" required>
                                                                    <option selected disabled>Month</option>
                                                                        <?php for($i=1;$i<=12;$i++){
                                                                        echo "<option value='$i'>".$i."</option>";
                                                                        }?>
                                                                </select>
                                                            </div>

                                                            <div class="col-2 inputTitle">
                                                                <label><h4>Birth Day</h4></label><br>
                                                                <select id="res_regbirthDay" class="form-control" name="res_regbirthDay" required>
                                                                    <option selected disabled>Day</option>
                                                                        <?php for($i=1;$i<=31;$i++){
                                                                        echo "<option value='$i'>".$i."</option>";
                                                                        }?>
                                                                </select>
                                                            </div>

                                                            <div class="col-2 inputTitle">
                                                                <label><h4>Birth Year</h4></label><br>
                                                                <select id="res_regbirthYear" class="form-control" name="res_regbirthYear" required>
                                                                    <option selected disabled>Year</option>
                                                                        <?php for($i=1990;$i<=2015;$i++){
                                                                        echo "<option value='$i'>".$i."</option>";
                                                                        }?>
                                                                </select>
                                                            </div>

                                                            <div class="col-2 inputTitle">
                                                                <label><h4>Age</h4></label><br>
                                                                <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="res_regAge" 
                                                                id="res_regAge" 
                                                                placeholder="Age"/>    
                                                            </div>

                                                            <div class="col-3 inputTitle">
                                                                <label><h4>Birth Place</h4></label><br>
                                                                <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="res_regbirthPlace" 
                                                                id="res_regbirthPlace" 
                                                                placeholder="Birth Place"/>    
                                                            </div>

                                                            <div class="col-3 inputTitle">
                                                                <label><h4>Sex</h4></label><br>
                                                                    <select id="sex" class="form-control" name="res_regSex" required>
                                                                        <option selected disabled>Sex</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                            </div>

                                                            <div class="col-3 inputTitle">
                                                                <label><h4>Civil Status</h4></label><br>
                                                                    <select id="civilStatus" class="form-control" name="res_regcivilStatus" required>
                                                                        <option selected disabled>Civil Status</option>
                                                                        <option value="Married">Married</option>
                                                                        <option value="Single">Single</option>
                                                                        <option value="Separated">Separated </option>
                                                                        <option value="Widowed ">Widowed </option>
                                                                        <option value="Divorced ">Divorced </option>
                                                                    </select>
                                                            </div>  
                                                            <div class="col-6 inputTitle">
                                                                <label><h4>Spouse Name</h4></label>
                                                                <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="res_regspouseName" 
                                                                id="res_regspouseName" 
                                                                placeholder="Spouse Name"/>
                                                            </div>

                                                            <div class="col-4 inputTitle">
                                                                <label><h4>Religion</h4></label>
                                                                <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="res_regreligion" 
                                                                id="res_regreligion" 
                                                                placeholder="Religion"
                                                                required/>
                                                            </div>

                                                            <div class="col-4 inputTitle">
                                                                <label><h4>Citizenship</h4></label>
                                                                <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="res_regcitizenship" 
                                                                id="res_regcitizenship" 
                                                                placeholder="Citizenship"
                                                                required/>
                                                            </div>

                                                            <div class="col-4 inputTitle">
                                                                <label><h4>Voter Status</h4></label><br>
                                                                    <select id="res_regVoterStatus" class="form-control" name="res_regVoterStatus" required>
                                                                        <option selected disabled>Voter Status</option>
                                                                        <option value="Voter">Voter</option>
                                                                        <option value="Not">Not</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                            <label><h3 class="infoTitle contactTitle">Educational Background</h3></label>
                                            <hr size = 3 noshade color=black>
                                            <div class="form-group">
                                                <div class="row"> 
                                                    <div class="col-4 inputTitle">
                                                        <label><h4>Elementary</h4></label>
                                                        <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        name="res_regElementary" 
                                                        id="res_regElementary" 
                                                        placeholder="Elementary"
                                                        required/>
                                                    </div>

                                                    <div class="col-4 inputTitle">
                                                        <label><h4>High School</h4></label>
                                                        <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        name="res_reghighSchool" 
                                                        id="res_reghighSchool" 
                                                        placeholder="High School"
                                                        required/>
                                                    </div>

                                                    <div class="col-4 inputTitle">
                                                        <label><h4>College</h4></label>
                                                        <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        name="res_regCollege" 
                                                        id="res_regCollege" 
                                                        placeholder="College"
                                                        required/>
                                                    </div>
                                                </div>
                                            </div>

                                            <label><h3 class="infoTitle contactTitle">Contact Information</h3></label>
                                            <hr size = 3 noshade color=black>
                                            
                                                <div class="form-group">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="inputTitle col-6">
                                                                <label><h4>Cellphone Number</h4></label>
                                                                <input 
                                                                type="number" 
                                                                class="form-control" 
                                                                name="res_regcellphone_number" 
                                                                id="res_regcellphone_number" 
                                                                placeholder="Cellphone Number"
                                                                required/>
                                                            </div>
                                                            
                                                            <div class="inputTitle col-6">
                                                                <label><h4>Telephone Number</h4></label>
                                                                <input 
                                                                type="number" 
                                                                class="form-control" 
                                                                name="res_regtelephone_number" 
                                                                id="res_regtelephone_number" 
                                                                placeholder="Telephone Number"/>
                                                            </div>
                                                        
                                                            <div class="inputTitle col-4">
                                                                <label><h4>Username</h4></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_regusername" 
                                                                    id="res_regusername" 
                                                                    placeholder="User Name"
                                                                    required/>
                                                                </div>
                                                            <div class="inputTitle col-8">
                                                                <label><h4>Email Address</h4></label>
                                                                <input 
                                                                type="email" 
                                                                class="form-control" 
                                                                name="res_regemail" 
                                                                id="res_regemail" 
                                                                placeholder="Email Address"
                                                                required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="inputTitle">
                                                            <label><h4>Address</h4></label>
                                                            <input
                                                            type="text" 
                                                            class="form-control" 
                                                            id="res_regaddress"
                                                            name="res_regaddress"
                                                            placeholder="Address"
                                                            required/>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="inputTitle col-5">
                                                                <label><h4>Purok</h4></label>
                                                                <input
                                                                type="number" 
                                                                class="form-control" 
                                                                id="res_regPurok"
                                                                name="res_regPurok"
                                                                placeholder="Purok"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                            <br><br><br>
                                                            <button class="btn btn-lg btn-warning btn-orange" type="submit" id="btnres_register" name="btnres_register">
                                                                <i class="glyphicon glyphicon-ok-sign"></i> Register
                                                            </button>
                                                            <button class="btn btn-lg btn-info" type="reset">
                                                                <i class="glyphicon glyphicon-repeat"></i> Reset
                                                            </button>
                                                            <br><br>
                                                        </div>
                                                </div>
                                            
                                        
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
            <!-- View Modal HTML -->
            <div id="viewResidentModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">						
                                <h4 class="modal-title">View Resident</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">					
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" disable>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" disable>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" disable></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" disable>
                                </div>					
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-danger" value="Close">
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
                                <h4 class="modal-title">Edit Resident</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">					
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" required>
                                </div>					
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save">
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
