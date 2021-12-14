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
					<h4 class="modal-title">Edit Resident</h4>
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
                                                    <h6>Upload a photo</h6>
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
                                                                        readonly/>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Middle Name</h5></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_regmiddleName" 
                                                                    id="res_regmiddleName" 
                                                                    placeholder="Middle Name"
                                                                    readonly/>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Last Name</h5></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_reglastname" 
                                                                    id="res_reglastname" 
                                                                    placeholder="Last Name"
                                                                    readonly/>
                                                                </div>

                                                                <div class="col-12 ">
                                                                    <label><h5 class="inputTitle">Birthday</h5></label><br>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <select id="res_regbirthMonth" class="form-control-option form-control" name="res_regbirthMonth" readonly>
                                                                                <option selected disabled>Month</option>
                                                                                    <?php for($i=1;$i<=12;$i++){
                                                                                    echo "<option value='$i'>".$i."</option>";
                                                                                    }?>
                                                                            </select>   
                                                                        </div>

                                                                        <div class="col-4">
                                                                            <select id="res_regbirthDay" class="form-control-option form-control" name="res_regbirthDay" readonly>
                                                                                <option selected disabled>Day</option>
                                                                                    <?php for($i=1;$i<=31;$i++){
                                                                                    echo "<option value='$i'>".$i."</option>";
                                                                                    }?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-4">
                                                                            <select id="res_regbirthYear" class="form-control-option form-control" name="res_regbirthYear" readonly>
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
                                                                            placeholder="Age"
                                                                            readonly/>    
                                                                        </div>

                                                                        <div class="col-8 inputTitle">
                                                                            <label><h5>Birth Place</h5></label><br>
                                                                            <input 
                                                                            type="text" 
                                                                            class="form-control" 
                                                                            name="res_regbirthPlace" 
                                                                            id="res_regbirthPlace" 
                                                                            placeholder="Birth Place"
                                                                            readonly/>    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-6 inputTitle">
                                                                            <label><h5>Sex</h5></label><br>
                                                                                <select id="sex" class="form-control" name="res_regSex" readonly>
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
                                                            </div>

                                                            <div class="col-6">
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
                                                                    readonly/>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Voter Status</h5></label><br>
                                                                        <select id="res_regVoterStatus" class="form-control" name="res_regVoterStatus" required>
                                                                            <option selected disabled>Voter Status</option>
                                                                            <option value="Voter">Voter</option>
                                                                            <option value="Not">Not</option>
                                                                        </select>
                                                                </div>

                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Occupation:</h5></label><br>
                                                                    <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_occupation" 
                                                                    id="res_occupation" 
                                                                    placeholder="Occupation"
                                                                    required/>
                                                                </div>
                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>Sector </h5></label><br>
                                                                        <select id="res_sector" class="form-control" name="res_sector" required>
                                                                            <option selected disabled>Sector</option>
                                                                            <option value="Private">Private</option>
                                                                            <option value="Public">Public</option>
                                                                            <option value="Government">Government</option>
                                                                            <option value="Unemployed">Unemployed</option>
                                                                            <option value="Out of School Youth (OSY)">Out of School Youth (OSY)</option>
                                                                            <option value="Out of School Children (OSC)">Out of School Children (OSC)</option>
                                                                            <option value="Person with Disability (PWD)">Person with Disability (PWD)</option>
                                                                            <option value="Senior Citizen (SC)">Senior Citizen (SC)</option>
                                                                            <option value="Overseas Filipino Worker (OFW)">Gov Overseas Filipino Worker (OFW)</option>
                                                                            <option value="Solo Parent">Solo Parent</option>
                                                                            <option value="Indigenous People (IP)">Indigenous People (IP)</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                    </div>
                                            </div>

                                            <div class="col-12">
                                                <label><h3 class="infoTitle contactTitle">Educational Background</h3></label>
                                                <hr size = 3 noshade color=black>
                                                <div class="col-12 form-group">
                                                    <div class="row"> 
                                                        <div class="col-4 inputTitle">
                                                            <label><h5>Elementary</h4></label>
                                                                <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="res_regElementary" 
                                                                    id="res_regElementary" 
                                                                    placeholder="Elementary"
                                                                    required/>
                                                        </div>

                                                        <div class="col-4 inputTitle">
                                                            <label><h5>High School</h4></label>
                                                                <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="res_reghighSchool" 
                                                                id="res_reghighSchool" 
                                                                placeholder="High School"
                                                                required/>
                                                        </div>

                                                        <div class="col-4 inputTitle">
                                                            <label><h5>College</h5></label>
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
                                            </div>

                                            <div class="col-12">
                                                <label><h3 class="infoTitle contactTitle">Contact Information</h3></label>
                                                <hr size = 3 noshade color=black>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">    
                                                            <div class="row">
                                                                <div class="col-12 inputTitle">
                                                                    <label><h5>City Address</h5></label>
                                                                    <textarea 
                                                                    type="textarea" 
                                                                    class="form-control" 
                                                                    name="res_cityaddress" 
                                                                    id="res_cityaddress" 
                                                                    placeholder="City Address"
                                                                    required></textarea>
                                                                </div>

                                                                <div class="col-12 inputTitle ">
                                                                    <label><h5>Provincial Address</h5></label>
                                                                    <textarea 
                                                                    type="textarea" 
                                                                    class="form-control" 
                                                                    name="res_provincialaddress" 
                                                                    id="res_provincialaddress" 
                                                                    placeholder="Provincial Address"
                                                                    required></textarea>
                                                                </div>

                                                                <div class="inputTitle col-12">
                                                                    <label><h5>Purok</h5></label>
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
                                                    <div class="col-6">
                                                        <div class="form-group">    
                                                            <div class="row">
                                                                <div class="inputTitle col-12">
                                                                    <label><h5>Cellphone Number</h5></label>
                                                                    <input 
                                                                    type="number" 
                                                                    class="form-control" 
                                                                    name="res_regcellphone_number" 
                                                                    id="res_regcellphone_number" 
                                                                    placeholder="Cellphone Number"
                                                                    required/>
                                                                </div>
                                                                
                                                                <div class="inputTitle col-12">
                                                                    <label><h5>Telephone Number</h5></label>
                                                                    <input 
                                                                    type="number" 
                                                                    class="form-control" 
                                                                    name="res_regtelephone_number" 
                                                                    id="res_regtelephone_number" 
                                                                    placeholder="Telephone Number"/>
                                                                </div>

                                                                <div class="inputTitle col-4">
                                                                    <label><h5>Username</h5></label><br>
                                                                        <input 
                                                                        type="text" 
                                                                        class="form-control" 
                                                                        name="res_regusername" 
                                                                        id="res_regusername" 
                                                                        placeholder="User Name"
                                                                        required/>
                                                                    </div>
                                                                <div class="inputTitle col-8">
                                                                    <label><h5>Email Address</h4></label>
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
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>            
                            </div>        
                        </div>
                    </form>
					<div class="modal-footer">
                        <input type="submit" class="btn btn-info" value="Edit">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
						
					</div>
				</form>
			</div>
		</div>
</body>
</html>














