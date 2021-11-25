<?php
    session_start();
    require ("config.php");
?>

<!DOCTYPE HTML>
<html lang="en">
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

<link rel="icon" type="image/png" sizes="32x32" href="image/logo_1.png">
<head>
    <title>Admin | Resident Records</title>
    <link type="text/css" href="css/AdminResidentRecords.css" rel="stylesheet">
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
                            <ion-icon name="briefcase-outline"><ion-icon>    
                        </span>
                        <span class="title">Blotter Records</span>
                    </a>
                </li>
            
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="calendar-outline"><ion-icon>    
                        </span>
                        <span class="title">Settlement Schedules</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="print-outline"><ion-icon>    
                        </span>
                        <span class="title">Certificate Records</span>
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
				                <div class="row">
					                <div class="col-sm-6">
						                <h2>Resident's <b>Details</b></h2>
					                </div>
					                <div class="col-sm-6">
						                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
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
                                        <td>ResidentID</td>
						                <td>FirstName</td>
						                <td>MiddleName</td>
						                <td>LastName</td>
                                        <td>Sex</td>
						                <td>BirthDate</td>
						                <td>BirthPlace</td>
						                <td>ContactNumber</td>
                                        <td>Email</td>
                                        <td>Address</td>
						                <td>RegisteredVoter</td>
						                    <td>
							                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
                    <div id="addEmployeeModal" class="modal fade">
	                    <div class="modal-dialog">
		                    <div class="modal-content">
			                    <form>
				                    <div class="modal-header">						
					                    <h4 class="modal-title">Add Employee</h4>
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
					                    <input type="submit" class="btn btn-success" value="Add">
				                    </div>
			                    </form>
		                    </div>
	                    </div>
                    </div>
                    <!-- Delete Modal HTML -->
                    <div id="deleteEmployeeModal" class="modal fade">
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
