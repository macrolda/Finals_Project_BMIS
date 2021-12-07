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

    <title>Resident | Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ResidentProfile.css">
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

                <li class="active">
                    <a href="ResidentProfile.php">Profile</a>
                </li>
                <li>
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
            
            <div class="container-fluid">
                <section>
                <div class="login-wrapper">
                <form
                action="database.php" 
                class="form" 
                name="res_register" 
                id="res_register" 
                onsubmit="return regValidation()">
                    <div class="container bootstrap snippet">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                        <div class="profileImage inputTitle">
                                            <div class="text-center">
                                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="user_image">
                                                <h6>Upload a photo</h6>
                                                <input type="file" class="text-center center-block file-upload upload_image">
                                            </div>
                                        </div>

                                        <label><h3 class="infoTitle">Personal Information</h3></label>
                                        <hr size = 3 noshade color=black>
                                            <div class="row">
                                                
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
                                                                    <i class="glyphicon glyphicon-ok-sign"></i> Save
                                                                </button>
                                                                <br><br>
                                                            </div>
                                                    </div>
                                                
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
        
                </div>
            </section>
                    
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
