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
                                                                        <option value="01" <?php echo ($_SESSION['res_birthMonth']=='01')?('selected'):(''); ?>>January </option>
                                                                        <option value="02" <?php echo ($_SESSION['res_birthMonth']=='02')?('selected'):(''); ?>>February </option>
                                                                        <option value="03" <?php echo ($_SESSION['res_birthMonth']=='03')?('selected'):(''); ?>>March</option>
                                                                        <option value="04" <?php echo ($_SESSION['res_birthMonth']=='04')?('selected'):(''); ?>>April </option>
                                                                        <option value="05" <?php echo ($_SESSION['res_birthMonth']=='05')?('selected'):(''); ?>>May </option>
                                                                        <option value="06" <?php echo ($_SESSION['res_birthMonth']=='06')?('selected'):(''); ?>>June </option>
                                                                        <option value="07" <?php echo ($_SESSION['res_birthMonth']=='07')?('selected'):(''); ?>>July</option>
                                                                        <option value="08" <?php echo ($_SESSION['res_birthMonth']=='08')?('selected'):(''); ?>>August </option>
                                                                        <option value="09" <?php echo ($_SESSION['res_birthMonth']=='09')?('selected'):(''); ?>>September </option>
                                                                        <option value="10" <?php echo ($_SESSION['res_birthMonth']=='10')?('selected'):(''); ?>>October </option>
                                                                        <option value="11" <?php echo ($_SESSION['res_birthMonth']=='11')?('selected'):(''); ?>>November</option>
                                                                        <option value="12" <?php echo ($_SESSION['res_birthMonth']=='12')?('selected'):(''); ?>>December</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-2 inputTitle">
                                                                    <label><h4>Birth Day</h4></label><br>
                                                                    <select id="res_profilebirthDay" class="form-control" name="res_profilebirthDay" required>
                                                                        <option selected disabled>Day</option>
                                                                        <option value="01" <?php echo ($_SESSION['res_birthDate']=='01')?('selected'):(''); ?>>01</option>
                                                                        <option value="02" <?php echo ($_SESSION['res_birthDate']=='02')?('selected'):(''); ?>>02</option>
                                                                        <option value="03" <?php echo ($_SESSION['res_birthDate']=='03')?('selected'):(''); ?>>03</option>
                                                                        <option value="04" <?php echo ($_SESSION['res_birthDate']=='04')?('selected'):(''); ?>>04</option>
                                                                        <option value="05" <?php echo ($_SESSION['res_birthDate']=='05')?('selected'):(''); ?>>05</option>
                                                                        <option value="06" <?php echo ($_SESSION['res_birthDate']=='06')?('selected'):(''); ?>>06</option>
                                                                        <option value="07" <?php echo ($_SESSION['res_birthDate']=='07')?('selected'):(''); ?>>07</option>
                                                                        <option value="08" <?php echo ($_SESSION['res_birthDate']=='08')?('selected'):(''); ?>>08</option>
                                                                        <option value="09" <?php echo ($_SESSION['res_birthDate']=='09')?('selected'):(''); ?>>09</option>
                                                                        <option value="10" <?php echo ($_SESSION['res_birthDate']=='10')?('selected'):(''); ?>>10</option>
                                                                        <option value="11" <?php echo ($_SESSION['res_birthDate']=='11')?('selected'):(''); ?>>11</option>
                                                                        <option value="12" <?php echo ($_SESSION['res_birthDate']=='12')?('selected'):(''); ?>>12</option>
                                                                        <option value="13" <?php echo ($_SESSION['res_birthDate']=='13')?('selected'):(''); ?>>13</option>
                                                                        <option value="14" <?php echo ($_SESSION['res_birthDate']=='14')?('selected'):(''); ?>>14</option>
                                                                        <option value="15" <?php echo ($_SESSION['res_birthDate']=='15')?('selected'):(''); ?>>15</option>
                                                                        <option value="16" <?php echo ($_SESSION['res_birthDate']=='16')?('selected'):(''); ?>>16</option>
                                                                        <option value="17" <?php echo ($_SESSION['res_birthDate']=='17')?('selected'):(''); ?>>17</option>
                                                                        <option value="18" <?php echo ($_SESSION['res_birthDate']=='18')?('selected'):(''); ?>>18</option>
                                                                        <option value="19" <?php echo ($_SESSION['res_birthDate']=='19')?('selected'):(''); ?>>19</option>
                                                                        <option value="20" <?php echo ($_SESSION['res_birthDate']=='20')?('selected'):(''); ?>>20</option>
                                                                        <option value="21" <?php echo ($_SESSION['res_birthDate']=='21')?('selected'):(''); ?>>21</option>
                                                                        <option value="22" <?php echo ($_SESSION['res_birthDate']=='22')?('selected'):(''); ?>>22</option>
                                                                        <option value="23" <?php echo ($_SESSION['res_birthDate']=='23')?('selected'):(''); ?>>23</option>
                                                                        <option value="24" <?php echo ($_SESSION['res_birthDate']=='24')?('selected'):(''); ?>>24</option>
                                                                        <option value="25" <?php echo ($_SESSION['res_birthDate']=='25')?('selected'):(''); ?>>25</option>
                                                                        <option value="26" <?php echo ($_SESSION['res_birthDate']=='26')?('selected'):(''); ?>>26</option>
                                                                        <option value="27" <?php echo ($_SESSION['res_birthDate']=='27')?('selected'):(''); ?>>27</option>
                                                                        <option value="28" <?php echo ($_SESSION['res_birthDate']=='28')?('selected'):(''); ?>>28</option>
                                                                        <option value="29" <?php echo ($_SESSION['res_birthDate']=='29')?('selected'):(''); ?>>29</option>
                                                                        <option value="30" <?php echo ($_SESSION['res_birthDate']=='30')?('selected'):(''); ?>>30</option>
                                                                        <option value="31" <?php echo ($_SESSION['res_birthDate']=='31')?('selected'):(''); ?>>31</option>
                                                                
                                                                    </select>
                                                                </div>

                                                                <div class="col-2 inputTitle">
                                                                    <label><h4>Birth Year</h4></label><br>
                                                                    <select id="res_profilebirthYear" class="form-control" name="res_profilebirthYear" required>
                                                                        <option selected disabled>Year</option>
                                                                        <option value="1990" <?php echo ($_SESSION['res_birthYear']=='1990')?('selected'):(''); ?>>1990</option>
                                                                        <option value="1991" <?php echo ($_SESSION['res_birthYear']=='1991')?('selected'):(''); ?>>1991</option>
                                                                        <option value="1992" <?php echo ($_SESSION['res_birthYear']=='1992')?('selected'):(''); ?>>1992</option>
                                                                        <option value="1993" <?php echo ($_SESSION['res_birthYear']=='1993')?('selected'):(''); ?>>1993</option>
                                                                        <option value="1994" <?php echo ($_SESSION['res_birthYear']=='1994')?('selected'):(''); ?>>1994</option>
                                                                        <option value="1995" <?php echo ($_SESSION['res_birthYear']=='1995')?('selected'):(''); ?>>1995</option>
                                                                        <option value="1996" <?php echo ($_SESSION['res_birthYear']=='1996')?('selected'):(''); ?>>1996</option>
                                                                        <option value="1997" <?php echo ($_SESSION['res_birthYear']=='1997')?('selected'):(''); ?>>1997</option>
                                                                        <option value="1998" <?php echo ($_SESSION['res_birthYear']=='1998')?('selected'):(''); ?>>1998</option>
                                                                        <option value="1999" <?php echo ($_SESSION['res_birthYear']=='1999')?('selected'):(''); ?>>1999</option>
                                                                        <option value="2000" <?php echo ($_SESSION['res_birthYear']=='2000')?('selected'):(''); ?>>2000</option>
                                                                        <option value="2001" <?php echo ($_SESSION['res_birthYear']=='2001')?('selected'):(''); ?>>2001</option>
                                                                        <option value="2002" <?php echo ($_SESSION['res_birthYear']=='2002')?('selected'):(''); ?>>2002</option>
                                                                        <option value="2003" <?php echo ($_SESSION['res_birthYear']=='2003')?('selected'):(''); ?>>2003</option>
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
                                                                    <select id="res_profilePurok" class="form-control" name="res_profilePurok">
                                                                            <option selected disabled>Purok</option>
                                                                            <option value="1" <?php echo ($_SESSION['res_purok']=='1')?('selected'):(''); ?>>1</option>
                                                                            <option value="2" <?php echo ($_SESSION['res_purok']=='2')?('selected'):(''); ?>>2</option>
                                                                            <option value="3" <?php echo ($_SESSION['res_purok']=='3')?('selected'):(''); ?>>3</option>
                                                                            <option value="4" <?php echo ($_SESSION['res_purok']=='4')?('selected'):(''); ?>>4</option>
                                                                        </select>
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
