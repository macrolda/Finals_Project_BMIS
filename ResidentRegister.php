<?php
session_start();
include ("config.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="image/logo_1.png">
<title>Resident | Register</title>
<link type="text/css" href="css/ResidentRegister.css" rel="stylesheet">
<script src="validation.js"></script>

</head>
<body>
    <div class="container">
        <div class="login-wrapper">
            <div class="box">
                <img class = "brgyImg"src="image\logo_1.png" alt="barangayLogo1">
                <h2>Resident's Registration</h2>
                <form
                action="database.php" 
                class="form" 
                name="res_register" 
                id="res_register" 
                onsubmit="return regValidation()"
                method="post">
                    <div class="container bootstrap snippet">
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
                                                <h6>Upload a photo</h6>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>   