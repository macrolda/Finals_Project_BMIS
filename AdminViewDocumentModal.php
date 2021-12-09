<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/AdminAddResidentModal.css">
</head>
<body>
    <div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">View Resident's Information</h4>
					<a  class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
				</div>
				<div class="modal-body">					
                    <form
                    action="database.php" 
                    class="form" 
                    name="res_register" 
                    id="res_register" 
                    onsubmit="return regValidation()">
                        <div class="container bootstrap snippet">
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
                                                            <div class="col-6">
                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>First Name</h5></label><br>
                                                                        <input 
                                                                        type="text" 
                                                                        class="form-control"
                                                                        name="res_regfirstname" 
                                                                        id="res_regfirstname" 
                                                                        placeholder="First Name"
                                                                        required/>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Middle Name</h5></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_regmiddleName" 
                                                                    id="res_regmiddleName" 
                                                                    placeholder="Middle Name"
                                                                    required/>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Last Name</h5></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_reglastname" 
                                                                    id="res_reglastname" 
                                                                    placeholder="Last Name"
                                                                    required/>
                                                                </div>

                                                                <div class="col-12 ">
                                                                    <label><h5 class="inputTitle">Birthday</h5></label><br>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <select id="res_regbirthMonth" class="form-control-option form-control" name="res_regbirthMonth" required>
                                                                                <option selected disabled>Month</option>
                                                                                    <?php for($i=1;$i<=12;$i++){
                                                                                    echo "<option value='$i'>".$i."</option>";
                                                                                    }?>
                                                                            </select>   
                                                                        </div>

                                                                        <div class="col-4">
                                                                            <select id="res_regbirthDay" class="form-control-option form-control" name="res_regbirthDay" required>
                                                                                <option selected disabled>Day</option>
                                                                                    <?php for($i=1;$i<=31;$i++){
                                                                                    echo "<option value='$i'>".$i."</option>";
                                                                                    }?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-4">
                                                                            <select id="res_regbirthYear" class="form-control-option form-control" name="res_regbirthYear" required>
                                                                                <option selected disabled>Year</option>
                                                                                    <?php for($i=1990;$i<=2015;$i++){
                                                                                    echo "<option value='$i'>".$i."</option>";
                                                                                    }?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 ">
                                                                    <div class="row">
                                                                        <div class="col-4 inputTitle">
                                                                            <label><h5>Age</h5></label><br>
                                                                            <input 
                                                                            type="text" 
                                                                            class="form-control" 
                                                                            name="res_regAge" 
                                                                            id="res_regAge" 
                                                                            placeholder="Age"/>    
                                                                        </div>

                                                                        <div class="col-8 inputTitle">
                                                                            <label><h5>Birth Place</h5></label><br>
                                                                            <input 
                                                                            type="text" 
                                                                            class="form-control" 
                                                                            name="res_regbirthPlace" 
                                                                            id="res_regbirthPlace" 
                                                                            placeholder="Birth Place"/>    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-6 inputTitle">
                                                                            <label><h5>Sex</h5></label><br>
                                                                                <select id="sex" class="form-control" name="res_regSex" required>
                                                                                    <option selected disabled>Sex</option>
                                                                                    <option value="Male">Male</option>
                                                                                    <option value="Female">Female</option>
                                                                                </select>
                                                                        </div>

                                                                        <div class="col-6 inputTitle">
                                                                            <label><h5>Civil Status</h5></label><br>
                                                                                <select id="civilStatus" class="form-control" name="res_regcivilStatus" required>
                                                                                    <option selected disabled>Civil Status</option>
                                                                                    <option value="Married">Married</option>
                                                                                    <option value="Single">Single</option>
                                                                                    <option value="Separated">Separated </option>
                                                                                    <option value="Widowed ">Widowed </option>
                                                                                    <option value="Divorced ">Divorced </option>
                                                                                </select>
                                                                        </div> 
                                                                    </div> 
                                                                </div>
                                                                 
                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Spouse Name</h5></label>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_regspouseName" 
                                                                    id="res_regspouseName" 
                                                                    placeholder="Spouse Name"/>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Religion</h4></label>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_regreligion" 
                                                                    id="res_regreligion" 
                                                                    placeholder="Religion"
                                                                    required/>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Citizenship</h5></label>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_regcitizenship" 
                                                                    id="res_regcitizenship" 
                                                                    placeholder="Citizenship"
                                                                    required/>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Voter Status</h5></label><br>
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

                                            
                        </div>
                    </form>
					<div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Add">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
						
					</div>
				</form>
			</div>
		</div>
</body>
</html>














