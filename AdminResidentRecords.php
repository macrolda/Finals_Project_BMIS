<?php
    session_start();
    require ("config.php");
    include'AdminSidebar.php';
?>

<head>
    <title>Admin | Resident Records</title>
    <link type="text/css" href="css/AdminResidentRecords.css" rel="stylesheet">             
</head>

<body>
    <div class="row">
        <div class="col-md-3 "></div>

        <div class="col-md-auto mainPage" >
            <h3 style="text-align: left; margin-bottom: 30px; font-size: 30px">Resident Records</h3>
            <! -- cards -->
            <div class="cardBox">
                <div class="cardd">
                    <div class="col-md-auto"><h2>Resident's Details</h2></div>
                </div>
                <div class="cardd">
                    <div class="col-md-auto">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
                

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Resident ID</th>
                            <th>FirstName</th>
                            <th>MiddleName</th>
                            <th>LastName</th>
                            <th>Gender</th>
                            <th>BirthDate</th>
                            <th>BirthPlace</th>
                            <th>CivilStatus</th>
                            <th>VoterStatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>127</td>
                            <td>John</td>
                            <td>Joe</td>
                            <td>Doe</td>
                            <td>Male</td>
                            <td>12/0/98</td>
                            <td>Single</td>
                            <td>Manila</td>
                            <td>Yes</td>
                        
                            <td>
							    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>    
                    </tbody>
                </table>  
            </div>    
            
        </div>
    </div>

    <script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="Resident ID" id="residentID"></td>' +
            '<td><input type="text" class="form-control" name="FirstName" id="FirstName"></td>' +
            '<td><input type="text" class="form-control" name="MiddleName" id="MiddleName"></td>' +
            '<td><input type="text" class="form-control" name="Resident ID" id="LastName"></td>' +
            '<td><input type="text" class="form-control" name="FirstName" id="Gender"></td>' +
            '<td><input type="text" class="form-control" name="MiddleName" id="BirthDate"></td>' +
            '<td><input type="text" class="form-control" name="Resident ID" id="BirthPlace"></td>' +
            '<td><input type="text" class="form-control" name="FirstName" id="CivilStatus"></td>' +
            '<td><input type="text" class="form-control" name="VoterStatus" id="VoterStatus"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>
</body>