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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="documents-outline"></ion-icon>    
                        </span>
                        <span class="title">Document Request</span>
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
            <hr>
                <div class="container bootstrap snippet">
                    <h1>User name</h1>
                
                    <div class="row">
                        <div class="col-sm-3"><!--left col-->
                            <div class="text-center">
                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                <input type="file" class="text-center center-block file-upload">
                            </div></hr><br>
                        </div><!--/col-3-->

                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <hr>
                                        <form class="form" action="##" method="post" id="registrationForm">
                                            <div class="form-group">
                                                <div class="col-xs-4">
                                                    <label for="first_name"><h4>First name</h4></label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control"
                                                    name="first_name" 
                                                    id="first_name" 
                                                    placeholder="First Name" 
                                                    title="enter your first name if any." 
                                                    disable>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-4">
                                                    <label for="mirst_name"><h4>Middle name</h4></label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    name="middleName" 
                                                    id="middleName" 
                                                    placeholder="Middle Name" 
                                                    title="enter your first name if any."
                                                    disable>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-4">
                                                    <label for="last_name"><h4>Last name</h4></label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    name="last_name" 
                                                    id="last_name" 
                                                    placeholder="Last Name" 
                                                    title="enter your last name if any."
                                                    disable>
                                            </div>
                                            </div>
                            
                                            <div class="form-group"> 
                                            <div class="col-xs-2">
                                                <label><h4>Birth Month</h4></label>
                                                <select id="birthMonth" class="birthday" name="birthMonth" required>
                                                    <option selected disabled>Month</option>
                                                        <?php for($i=1;$i<=12;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                        }?>
                                                </select>
                                            </div>

                                            <div class="form-group"> 
                                            <div class="col-xs-2">
                                                <label><h4>Birth Day</h4></label>
                                                <select id="birthMonth" class="birthday" name="birthMonth" required>
                                                    <option selected disabled>Month</option>
                                                        <?php for($i=1;$i<=31;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                        }?>
                                                </select>
                                            </div>

                                            <div class="form-group"> 
                                            <div class="col-xs-2">
                                                <label><h4>Birth Year</h4></label>
                                                <select id="birthMonth" class="birthday" name="birthMonth" required>
                                                    <option selected disabled>Month</option>
                                                        <?php for($i=1990;$i<=2015;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                        }?>
                                                </select>
                                            </div>

                                            <div class="form-group"> 
                                            <div class="col-xs-6">
                                                <label><h4>Birth Place</h4></label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                name="birthPlace" 
                                                id="birthPlace" 
                                                placeholder="Birth Place" 
                                                title="."
                                                disable>    
                                            </div>

                                            <div class="form-group"> 
                                            <div class="col-xs-3">
                                                <label><h4>Sex</h4></label>
                                                    <select id="sex" class="" name="sex" required>
                                                        <option selected disabled>Sex</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Preferred Not to Answer">Preferred Not to Answer</option>
                                                    </select>
                                            </div>

                                            <div class="form-group"> 
                                            <div class="col-xs-3">
                                                <label><h4>Civil Status</h4></label>
                                                    <select id="civilStatus" class="" name="civilStatus" required>
                                                        <option selected disabled>Civil Status</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Separated">Separated </option>
                                                        <option value="Widowed ">Widowed </option>
                                                        <option value="Divorced ">Divorced </option>
                                                    </select>
                                            </div>

                                            <div class="form-group"> 
                                            <div class="col-xs-6">
                                                <label><h4>Spouse Name</h4></label>
                                                <input type="text" class="form-control">
                                            </div>
                                            

                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="contactNumber"><h4>Contact Number</h4></label>
                                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact Number" title="enter your phone number if any.">
                                                </div>
                                            </div>
                            
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="email"><h4>Email</h4></label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label><h4>Address</h4></label>
                                                    <input type="textarea" class="form-control" id="userEmail" placeholder="Address" title="enter a location">
                                                </div>
                                            </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                    <br>
                                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                                </div>
                                        </div>
                                        </form>
                                
                                    <hr>
                                </div><!--/tab-pane-->
                            </div><!--/col-9-->
                        </div><!--/row-->
                    </div>
                </div>
            </hr>
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