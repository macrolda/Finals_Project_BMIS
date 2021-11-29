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
<link type="text/css" href="css/ResidentProfile.css" rel="stylesheet">
<script src="validation.js"></script>

</head>

<body>
    <div class="container">
        <!-- START OF SIDE BAR -->
        <div class="navigation ">
            <ul>
                <div>
                    <div class="user">
                        <img class="imgLogo" src="image/logo_1.png">
                    </div>
                    <h1 class="brgyName">Barangay Tabunok</h1>
                </div>

                <li class="list">
                    <a href="ResidentDashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"><ion-icon>    
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="list hovered">
                    <a href="ResidentProfile.php">
                        <span class="icon">
                            <ion-icon name="person-outline"><ion-icon>    
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li class="list">
                    <a href="ResidentRequestCert.php">
                        <span class="icon">
                            <ion-icon name="documents-outline"></ion-icon>    
                        </span>
                        <span class="title">Document Request</span>
                    </a>
                </li>
                
                <li class="list">
                    <a href="ResidentNotification.php">
                        <span class="icon">
                            <ion-icon name="notifications-outline"></ion-icon>    
                        </span>
                        <span class="title">Notification</span>
                    </a>
                </li>
            
                <li class="list" style="margin-top: 100px;">
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"><ion-icon>    
                        </span>
                        <span class="title">Log-Out</span>
                    </a>
                </li>

                <div class="currentDayTime">
                    <p>Date/Time: <br><span id="datetime"></span></p>
                </div>
            </ul>
        </div>
        <!-- END OF SIDE BAR -->
     
        <div class="main">
            <!-- userProfile -->
            
                <div class="container bootstrap snippet">
                    <h1>Edit Profile</h1>
                        <div class="text-center">
                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="user_image">
                                <input type="file" class="text-center center-block file-upload upload_image">
                        </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                
                                    <label><h2 class="infoTitle">Personal Information</h2></label>
                                    <hr size = 3 noshade color=black>
                                    <form>
                                        <div class="form-group">    
                                            <div class="col-xs-3 inputTitle">
                                                <label><h4>First Name</h4></label><br>
                                                    <input 
                                                    type="text" 
                                                    class="form-control"
                                                    name="first_name" 
                                                    id="first_name" 
                                                    placeholder="First Name">
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-3 inputTitle">
                                                <label><h4>Middle Name</h4></label><br>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    name="middleName" 
                                                    id="middleName" 
                                                    placeholder="Middle Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-3 inputTitle">
                                                <label><h4>Last Name</h4></label><br>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    name="last_name" 
                                                    id="last_name" 
                                                    placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-2 inputTitle">
                                                <label><h4>Suffix</h4></label><br>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    name="suffix_name" 
                                                    id="suffix_name" 
                                                    placeholder="Suffix">
                                            </div>
                                        </div>
                            
                                        <div class="form-group"> 
                                            <div class="col-xs-3 inputTitle">
                                                <label><h4>Birth Month</h4></label><br>
                                                <select id="birthMonth" class="form-control" name="birthMonth" required>
                                                    <option selected disabled>Month</option>
                                                        <?php for($i=1;$i<=12;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                        }?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-2 inputTitle">
                                                <label><h4>Birth Day</h4></label><br>
                                                <select id="birthMonth" class="form-control" name="birthMonth" required>
                                                    <option selected disabled>Day</option>
                                                        <?php for($i=1;$i<=31;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                        }?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-2 inputTitle">
                                                <label><h4>Birth Year</h4></label><br>
                                                <select id="birthMonth" class="form-control" name="birthMonth" required>
                                                    <option selected disabled>Year</option>
                                                        <?php for($i=1990;$i<=2015;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                        }?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-2 inputTitle">
                                                <label><h4>Age</h4></label><br>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="age" 
                                                id="age" 
                                                placeholder="Age">    
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-3 inputTitle">
                                                <label><h4>Birth Place</h4></label><br>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="birthPlace" 
                                                id="birthPlace" 
                                                placeholder="Birth Place">    
                                            </div>
                                        </div>
                                        
                                        <div class="form-group"> 
                                            <div class="col-xs-3 inputTitle">
                                                <label><h4>Sex</h4></label><br>
                                                    <select id="sex" class="form-control" name="sex" required>
                                                        <option selected disabled>Sex</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-3 inputTitle">
                                                <label><h4>Civil Status</h4></label><br>
                                                    <select id="civilStatus" class="form-control" name="civilStatus" required>
                                                        <option selected disabled>Civil Status</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Separated">Separated </option>
                                                        <option value="Widowed ">Widowed </option>
                                                        <option value="Divorced ">Divorced </option>
                                                    </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group"> 
                                            <div class="col-xs-6 inputTitle">
                                                <label><h4>Spouse Name</h4></label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="spouseName" 
                                                id="spouseName" 
                                                placeholder="Spouse Name">
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-4 inputTitle">
                                                <label><h4>Religion</h4></label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="religion" 
                                                id="religion" 
                                                placeholder="Religion">
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-4 inputTitle">
                                                <label><h4>Citizenship</h4></label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="citizenship" 
                                                id="citizenship" 
                                                placeholder="Citizenship">
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-4 inputTitle">
                                                <label><h4>Job/Occupation</h4></label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="job" 
                                                id="job" 
                                                placeholder="Job/Occupation">
                                            </div>
                                        </div>
                                    </form>

                                    <label><h2 class="infoTitle contactTitle">Educational Background</h2></label>
                                    <hr size = 3 noshade color=black>
                                    <form>
                                        <div class="form-group"> 
                                            <div class="col-xs-4 inputTitle">
                                                <label><h4>Elementary</h4></label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="elementary" 
                                                id="elementary" 
                                                placeholder="Elementary">
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-4 inputTitle">
                                                <label><h4>High School</h4></label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="highSchool" 
                                                id="highSchool" 
                                                placeholder="High School">
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <div class="col-xs-4 inputTitle">
                                                <label><h4>College</h4></label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="College" 
                                                id="College" 
                                                placeholder="College">
                                            </div>
                                        </div>
                                    </form>

                                    <label><h2 class="infoTitle contactTitle">Contact Information</h2></label>
                                    <hr size = 3 noshade color=black>
                                    <form>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <div class="inputTitle">
                                                    <label><h4>Cellphone Number</h4></label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    name="cellphone_number" 
                                                    id="cellphone_number" 
                                                    placeholder="Cellphone Number">
                                                </div>
                                                <div class="inputTitle">
                                                    <label><h4>Telephone Number</h4></label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    name="telephone_number" 
                                                    id="telephone_number" 
                                                    placeholder="Telephone Number">
                                                </div>

                                                <div class="inputTitle">
                                                    <label><h4>Email Address</h4></label>
                                                    <input 
                                                    type="email" 
                                                    class="form-control" 
                                                    name="email" 
                                                    id="email" 
                                                    placeholder="Email Address">
                                                </div>

                                            </div>
                                            <div class="col-xs-6">
                                                <div class="inputTitle">
                                                    <label><h4>Address</h4></label>
                                                    <input
                                                    type="textarea" 
                                                    class="form-control" 
                                                    id="address"
                                                    placeholder="Address">
                                                </div>
                                                
                                                <div class="col-xs-5">
                                                    <div class="inputTitle">
                                                        <label><h4>Purok</h4></label>
                                                        <input
                                                        type="number" 
                                                        class="form-control" 
                                                        id="Purok"
                                                        placeholder="Purok">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                    <br><br><br>
                                                    <button class="btn btn-lg btn-success" type="submit">
                                                        <i class="glyphicon glyphicon-ok-sign"></i> Save
                                                    </button>
                                                    <button class="btn btn-lg btn-info" type="reset">
                                                        <i class="glyphicon glyphicon-repeat"></i> Reset
                                                    </button>
                                                    <br><br><br><br>
                                                </div>
                                        </div>
                                    
                                    </form>

                                </div><!--/tab-pane-->
                            </div><!--/col-9-->
                        </div><!--/row-->
                    </div>
                </div>
        </div>
    </div>

    </div>
<!---SCRIPTS--->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    var x = new Date()
    var x1= x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear() + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
    document.getElementById('datetime').innerHTML = x1;
    
    // add hovered class in selected list item
    let list = document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item) => item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item) => item.addEventListener('mouseover',activeLink));
</script>
<!---SCRIPTS--->
</body>
</html>