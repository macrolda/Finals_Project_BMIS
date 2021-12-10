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
                    <a href="BarangayMap.php">Barangay Information</a>
                </li>
                <li>
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
                    <h2 id="navHeader">Resident's Profile</h2>
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
                                                                        name="res_profilefirstname" 
                                                                        id="res_profilefirstname" 
                                                                        placeholder="First Name"
                                                                        value= <?php echo $_SESSION['res_firstaName'];?>
                                                                        readonly/>
                                                                </div>

                                                                <div class="col-4 inputTitle">
                                                                <label><h4>Middle Name</h4></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_profilemiddleName" 
                                                                    id="res_profilemiddleName" 
                                                                    placeholder="Middle Name"
                                                                    value= <?php echo $_SESSION['res_middleName'];?>
                                                                    readonly/>
                                                                </div>

                                                                <div class="col-4 inputTitle">
                                                                <label><h4>Last Name</h4></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_profilelastname" 
                                                                    id="res_profilelastname" 
                                                                    placeholder="Last Name"
 		                                                            value= <?php echo $_SESSION['res_lastName'];?>
                                                                    readonly/>
                                                                </div>

                                                                <div class="col-3 inputTitle">
                                                                    <label><h4>Birth Month</h4></label><br>
                                                                    <select id="res_profilebirthMonth" class="form-control" name="res_profilebirthMonth" required>
                                                                        <option selected disabled>Month</option>
                                                                            <?php for($i=1;$i<=12;$i++){
                                                                            echo "<option value='$i'>".$i."</option>";
                                                                            }?>
                                                                    </select>
                                                                </div>

                                                                <div class="col-2 inputTitle">
                                                                    <label><h4>Birth Day</h4></label><br>
                                                                    <select id="res_profilebirthDay" class="form-control" name="res_profilebirthDay" required>
                                                                        <option selected disabled>Day</option>
                                                                            <?php for($i=1;$i<=31;$i++){
                                                                            echo "<option value='$i'>".$i."</option>";
                                                                            }?>
                                                                    </select>
                                                                </div>

                                                                <div class="col-2 inputTitle">
                                                                    <label><h4>Birth Year</h4></label><br>
                                                                    <select id="res_profilebirthYear" class="form-control" name="res_profilebirthYear" required>
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
                                                                    name="res_profileAge" 
                                                                    id="res_profileAge" 
                                                                    placeholder="Age"
                                                                    value= <?php echo $_SESSION['res_age'];?>
                                                                    readonly
                                                                />    
                                                                </div>

                                                                <div class="col-3 inputTitle">
                                                                    <label><h4>Birth Place</h4></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_profilebirthPlace" 
                                                                    id="res_profilebirthPlace" 
                                                                    placeholder="Birth Place"
                                                                    value= <?php echo $_SESSION['res_birthPlace'];?>
                                                                    readonly/>    
                                                                </div>

                                                                <div class="col-3 inputTitle">
                                                                    <label><h4>Sex</h4></label><br>
                                                                        <select id="res_profileSex" class="form-control" name="res_profileSex" name="info-gender"  value=<?php echo $_SESSION['res_gender'];?>>
                                                                            <option selected disabled>Sex</option>
                                                                            <option value="Male" <?php echo ($_SESSION['res_gender']=='Male')?('selected'):(''); ?>>Male</option>
                                                                            <option value="Female" <?php echo ($_SESSION['res_gender']=='Female')?('selected'):(''); ?>>Female</option>
                                                                        </select>
                                                                </div>

                                                                <div class="col-3 inputTitle">
                                                                    <label><h4>Civil Status</h4></label><br>
                                                                        <select id="res_profilecivilStatus" class="form-control" name="res_profilecivilStatus"  value= <?php echo $_SESSION['res_civilStatus'];?> >
                                                                            <option selected disabled>Civil Status</option>
                                                                            <option value="Married" <?php echo ($_SESSION['res_civilStatus']=='Married')?('selected'):(''); ?>>Married</option>
                                                                            <option value="Single" <?php echo ($_SESSION['res_civilStatus']=='Single')?('selected'):(''); ?>>Single</option>
                                                                            <option value="Separated" <?php echo ($_SESSION['res_civilStatus']=='Separated')?('selected'):(''); ?>>Separated </option>
                                                                            <option value="Widowed" <?php echo ($_SESSION['res_civilStatus']=='Widowed')?('selected'):(''); ?>>Widowed </option>
                                                                            <option value="Divorced" <?php echo ($_SESSION['res_civilStatus']=='Divorced')?('selected'):(''); ?>>Divorced </option>
                                                                        </select>
                                                                </div>  
                                                                <div class="col-6 inputTitle">
                                                                    <label><h4>Spouse Name</h4></label>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_profilespouseName" 
                                                                    id="res_profilespouseName" 
                                                                    placeholder="Spouse Name"
                                                                    value= <?php echo $_SESSION['res_spouseName'];?>
                                                                    />
                                                                </div>

                                                                <div class="col-4 inputTitle">
                                                                    <label><h4>Religion</h4></label>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_profilereligion" 
                                                                    id="res_profilereligion" 
                                                                    placeholder="Religion"
                                                                    value= <?php echo $_SESSION['res_religion'];?>
                                                                    required/>
                                                                </div>

                                                                <div class="col-4 inputTitle">
                                                                    <label><h4>Citizenship</h4></label>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_profilecitizenship" 
                                                                    id="res_profilecitizenship" 
                                                                    placeholder="Citizenship"
                                                                    value= <?php echo $_SESSION['res_citizenship'];?>
                                                                    required/>
                                                                </div>

                                                                <div class="col-4 inputTitle">
                                                                    <label><h4>Voter Status</h4></label><br>
                                                                        <select id="res_profileVoterStatus" class="form-control" name="res_profileVoterStatus" value= <?php echo $_SESSION['res_voterStatus'];?>>
                                                                            <option selected disabled>Voter Status</option>
                                                                            <option value="Voter" <?php echo ($_SESSION['res_voterStatus']=='Voter')?('selected'):(''); ?>>Voter</option>
                                                                            <option value="Not" <?php echo ($_SESSION['res_voterStatus']=='Not')?('selected'):(''); ?>>Not</option>
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
                                                            name="res_profileElementary" 
                                                            id="res_profileElementary" 
                                                            placeholder="Elementary"
                                                            value= <?php echo $_SESSION['res_elementary'];?>
                                                            readonly/>
                                                        </div>

                                                        <div class="col-4 inputTitle">
                                                            <label><h4>High School</h4></label>
                                                            <input 
                                                            type="text" 
                                                            class="form-control" 
                                                            name="res_profilehighSchool" 
                                                            id="res_profilehighSchool" 
                                                            placeholder="High School"
                                                            value= <?php echo $_SESSION['res_highSchool'];?>
                                                            readonly/>
                                                        </div>

                                                        <div class="col-4 inputTitle">
                                                            <label><h4>College</h4></label>
                                                            <input 
                                                            type="text" 
                                                            class="form-control" 
                                                            name="res_profileCollege" 
                                                            id="res_profileCollege" 
                                                            placeholder="College"
                                                            value= <?php echo $_SESSION['res_college'];?>
                                                            readonly/>
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
                                                                    name="res_profilecellphone_number" 
                                                                    id="res_profilecellphone_number" 
                                                                    placeholder="Cellphone Number"
                                                                    value= <?php echo $_SESSION['res_phoneNumber'];?>
                                                                    required/>
                                                                </div>
                                                                
                                                                <div class="inputTitle col-6">
                                                                    <label><h4>Telephone Number</h4></label>
                                                                    <input 
                                                                    type="number" 
                                                                    class="form-control" 
                                                                    name="res_profiletelephone_number" 
                                                                    id="res_profiletelephone_number" 
                                                                    placeholder="Telephone Number"
                                                                    value= <?php echo $_SESSION['res_telephone'];?>/>
                                                                </div>
                                                            
                                                                <div class="inputTitle col-4">
                                                                    <label><h4>Username</h4></label><br>
                                                                        <input 
                                                                        type="text" 
                                                                        class="form-control" 
                                                                        name="res_profileusername" 
                                                                        id="res_profileusername" 
                                                                        placeholder="User Name"
                                                                        value= <?php echo $_SESSION['res_alias'];?>
                                                                        required/>
                                                                    </div>
                                                                <div class="inputTitle col-8">
                                                                    <label><h4>Email Address</h4></label>
                                                                    <input 
                                                                    type="email" 
                                                                    class="form-control" 
                                                                    name="res_profileemail" 
                                                                    id="res_profileemail" 
                                                                    placeholder="Email Address"
                                                                    value= <?php echo $_SESSION['res_email'];?>
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
                                                                id="res_profileaddress"
                                                                name="res_profileaddress"
                                                                placeholder="Address"
                                                                value= <?php echo $_SESSION['res_address'];?>
                                                                required/>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="inputTitle col-5">
                                                                    <label><h4>Purok</h4></label>
                                                                    <input
                                                                    type="number" 
                                                                    class="form-control" 
                                                                    id="res_profilePurok"
                                                                    name="res_profilePurok"
                                                                    placeholder="Purok"
                                                                    value= <?php echo $_SESSION['res_purok'];?>/>
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
