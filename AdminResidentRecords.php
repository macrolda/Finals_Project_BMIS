<?php
    session_start();
    require ("config.php");
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="icon" type="image/png" sizes="32x32" href="image/logo_1.png">

<title>Admin | Resident Records</title>
<link type="text/css" href="css/AdminResidentRecords.css" rel="stylesheet">
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

                <li class="list ">
                    <a href="AdminDashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"><ion-icon>    
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="list hovered">
                    <a href="AdminResidentRecords.php">
                        <span class="icon">
                            <ion-icon name="person-outline"><ion-icon>    
                        </span>
                        <span class="title">Resident Records</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="albums-outline"><ion-icon>    
                        </span>
                        <span class="title">Certification Records</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="print-outline"><ion-icon>    
                        </span>
                        <span class="title">Certificate Request</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"><ion-icon>    
                        </span>
                        <span class="title">Barangay Settings</span>
                    </a>
                </li>

                <li class="list">
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"><ion-icon>    
                        </span>
                        <span class="title">Log-Out</span>
                    </a>
                </li>

                <div  class="currentDayTime">
                    <p>Date/Time: <br><span id="datetime"></span></p>
                </div>
            </ul>
        </div>
        <!-- END OF SIDE BAR -->
     
        <div class="main">
            <div class="topbar">
                <!-- userImg -->
                <div class="user">
                    <img  src="image/default_img.png">
                </div>
            </div>
            
            <div class="col-md-auto mainPage" >
                <h3 
                style="text-align: 
                center; margin-bottom: 
                30px; font-size: 30px">Residents Records</h3>
                <! -- TABLE -->
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
			                <div class="table-title"> 
                                <div class="col-sm-4">
						                <h2 class="resiTitle">Resident's <b>Details</b></h2>
					            </div>
				                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="search-box">
                                            <i class="material-icons">&#xE8B6;</i>
                                            <input type="text" class="form-control" placeholder="Search&hellip;">
                                        </div>
                                    </div>

					                <div class="col-sm-6">
						                <a href="#addResidentModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Resident</span></a>
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
                                        <th>ResidentID</th>
						                <th>FirstName</th>
						                <th>MiddleName</th>
						                <th>LastName</th>
                                        <th>Sex</th>
						                <th>BirthDate</th>
						                <th>BirthPlace</th>
                                        <th>CivilStatus</th>
						                <th>ContactNumber</th>
                                        <th>Email</th>
                                        <th>Address</th>
						                <th>RegisteredVoter</th>
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
                                        <td>ResidentID_INPUT</td>
						                <td>FirstName_INPUT</td>
						                <td>MiddleName_INPUT</td>
						                <td>LastName_INPUT</td>
                                        <td>Sex_INPUT</td>
						                <td>BirthDate_INPUT</td>
						                <td>BirthPlace_INPUT</td>
                                        <td>CivilStatus_INPUT</td>
						                <td>ContactNumber_INPUT</td>
                                        <td>Email_INPUT</td>
                                        <td>Address_INPUT</td>
						                <td>RegisteredVoter_INPUT</td>
						                    <td class="row">
							                    <a href="#editResidentModal" class="col-sm-6 edit" data-toggle="modal">
                                                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                </a>
							                    <a href="#deleteResidentModal" class="col-sm-6 delete" data-toggle="modal">
                                                    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                                </a>
						                    </td>
					                </tr>					
				                </tbody>

			                </table>
			                <div class="clearfix">
				                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				                    <ul class="pagination">
					                    <li class="page-item disabled"><a href="#">Previous</a></li>
					                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
					                    <li class="page-item"><a href="#" class="page-link">2</a></li>
					                    <li class="page-item"><a href="#" class="page-link">3</a></li>
					                    <li class="page-item"><a href="#" class="page-link">4</a></li>
					                    <li class="page-item"><a href="#" class="page-link">5</a></li>
					                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
				                    </ul>
			                    </div>
		                    </div>
	                    </div>        
                    </div>
                    <!-- Edit Modal HTML -->
                    <div id="addResidentModal" class="modal fade">
	                    <div class="modal-dialog">
		                    <div class="modal-content">
			                    <form class="container">
				                    <div class="modal-header">						
					                    <h4 class="modal-title">Add Resident</h4>
					                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                    </div>
				                    <div class="modal-body">					
					                    <div class="form-group">
						                    <label>Resident ID: </label>
						                    <input type="number" class="form-control" disabled>
					                    </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label>First Name: </label>
                                                <input type="text" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-4">
                                                <label>Middle Name: </label>
                                                <input type="text" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-4">
                                                <label>Last Name:</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label>Birth Month/Date/Year:</label>
                                                
                                                <select id="birthMonth" class="birthday" name="birthMonth" required>
                                                    <option selected disabled>Month</option>
                                                    <?php for($i=1;$i<=12;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                    }?>
                                                </select>
                    
                                                <select id="birthDate" class="birthday" name="birthDate" required>
                                                    <option selected disabled>Date</option>
                                                    <?php for($i=1;$i<=31;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                    }?>
                                                </select>

                                                <select id="birthYear" class="birthday" name="birthYear" required>
                                                    <option selected disabled>Year</option>
                                                    <?php for($i=1990;$i<=2015;$i++){
                                                        echo "<option value='$i'>".$i."</option>";
                                                    }?>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-4">
                                                <label>Birth Place:</label>
                                                <input type="text" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-4">
                                                <label>Sex:</label>
                                                <select id="sex" class="" name="sex" required>
                                                    <option selected disabled>Sex</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Preferred Not to Answer">Preferred Not to Answer</option>
                                                </select>
					                    </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-2">
                                                <label>Civil Status:</label>
                                                <select id="civilStatus" class="" name="civilStatus" required>
                                                    <option selected disabled>Civil Status</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Separated">Separated </option>
                                                    <option value="Widowed ">Widowed </option>
                                                    <option value="Divorced ">Divorced </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-10">
                                                <label>Spouse Name:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label>Contact Number:</label>
                                                <input type="number" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label>Email:</label>
                                                <input type="email" class="form-control" required>
                                            </div>
                                        </div>

					                    <div class="form-group">
						                    <label>Address:</label>
						                    <textarea class="form-control" required></textarea>
					                    </div>

                                        <div class="form-group">
						                    <label>Registered Voter:</label>
                                            <select id="registeredVoter" class="" name="registeredVoter" required>
                                                <option selected disabled> </option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
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
                    <!-- Delete Modal HTML -->
                    <div id="deleteResidentModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">						
					                    <h4 class="modal-title">Delete Employee</h4>
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
        </div>
    </div>
<!---SCRIPTS--->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    //Date and timestamp
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

    //modal
    $(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<!---SCRIPTS--->
</body>
</html>
