<?php

include ('config.php');  

if(isset($_POST['btnres_register']))
{
    $res_reglastname = $_POST['res_reglastname'];
    $res_regfirstname = $_POST['res_regfirstname'];
    $res_regmiddleName = $_POST['res_regmiddleName'];
    $res_regusername = $_POST['res_regusername'];
    $res_regspouseName = $_POST['res_regspouseName'];
    $res_regpassword = $birth_month.$birth_day.$birth_year;
    $res_regbirthMonth = $_POST['res_regbirthMonth'];
    $res_regbirthDay = $_POST['res_regbirthDay'];
    $res_regbirthYear = $_POST['res_regbirthYear'];
    $res_regAge = $_POST['res_regAge'];
    $res_regPurok = $_POST['res_regPurok'];
    $res_regaddress = $_POST['res_regaddress'];
    $res_regbirthPlace = $_POST['res_regbirthPlace'];
    $res_regSex = $_POST['res_regSex'];
    $res_regcivilStatus = $_POST['res_regcivilStatus'];
    $res_regVoterStatus = $_POST['res_regVoterStatus'];
    $res_regOccupation = $_POST['res_regOccupation'];
    $res_regSector = $_POST['res_regSector'];
    $res_regcellphone_number = $_POST['res_regcellphone_number'];
    $res_regtelephone_number = $_POST['res_regtelephone_number'];
    $res_regemail = $_POST['res_regemail'];
    $res_regreligion = $_POST['res_regreligion'];
    $res_regcitizenship = $_POST['res_regcitizenship'];
    $res_regElementary = $_POST['res_regElementary'];
    $res_reghighSchool= $_POST['res_reghighSchool'];
    $res_regCollege = $_POST['res_regCollege'];
    
    $res_regpassword = $res_reglastname.$res_regfirstname;

    if(strlen($res_regcellphone_number) != 11 )
    {
        $alert = '<script>alert("enter your contact number");
                 window.location.href="ResidentRegister.php";</script>';
        echo $alert;
    }

    $encoder = $_POST['encoder'];
    $encoderPosition = $_POST['encoderPosition'];
    $encoderPurok = $_POST['encoderPurok'];
    $event = "Registered resident ";
    $timestamp = date("Y-m-d h:i:s A");
    $transactionID = "RR-".date("Ymdhis");
    $residentFullName = $lastName.', '.$firstName.' '.$middleName;

    $res_sql ="INSERT INTO resident_info (res_lastName, res_firstaName, res_middleName, res_alias,	res_spouseName, res_password, res_birthMonth,
     res_birthDate, res_birthYear, res_age, res_purok, res_address, res_birthPlace, res_gender, res_civilStatus, res_voterStatus, res_occupation, res_sector, res_phoneNumber, res_telephone, res_email,
     res_religion, res_citizenship, res_elementary, res_highSchool, res_college)
    VALUES('$res_reglastname', '$res_regfirstname', '$res_regmiddleName', '$res_regusername', '$res_regspouseName','$res_regpassword', '$res_regbirthMonth', 
    '$res_regbirthDay', '$res_regbirthYear', '$res_regAge', '$res_regPurok', '$res_regaddress', '$res_regbirthPlace', '$res_regSex', '$res_regcivilStatus', '$res_regVoterStatus', 
    '$res_regOccupation','$res_regSector','$res_regcellphone_number', '$res_regtelephone_number', '$res_regemail', '$res_regreligion', '$res_regcitizenship', '$res_regElementary', '$res_reghighSchool', '$res_regCollege');";


    $insertToLogs = "INSERT INTO logs_info (log_transactionID, log_timestamp, log_event, log_personName, , log_personID, log_encoder, log_encoderPosition)
    VALUES ('$transactionID', '$timestamp', '$event','$residentFullName', '$user_id',  '$encoder', '$encoderPosition');";

    mysqli_query($conn, $res_sql);
    mysqli_query($conn, $insertToLogs);

    header('Location: ResidentPortal_logIn.php');
}

if(isset($_POST['res_logIn']))
{
    $res_logIn_Username = $_POST['res_logIn_Username'];
    $res_logIn_password= $_POST['res_logIn_password'];
    $res_sql= "SELECT * FROM resident_info WHERE res_alias='$res_logIn_Username' AND res_password='$res_logIn_password'";
    $res_info = mysqli_query($conn, $res_sql);
    if (mysqli_num_rows($res_info) == 1){
        while($qResult = mysqli_fetch_assoc($res_info)){
                    $res_lastName = $qResult['res_lastName'];
                    $res_firstaName= $qResult['res_firstaName'];
                    $res_middleName = $qResult['res_middleName'];
                    $res_alias = $qResult['res_alias'];
                    $res_spouseName = $qResult['res_spouseName'];
                    $res_password = $qResult['res_password'];
                    $res_birthMonth= $qResult['res_birthMonth'];
                    $res_birthDate = $qResult['res_birthDate'];
                    $res_birthYear = $qResult['res_birthYear'];
                    $res_age = $qResult['res_age'];
                    $res_purok = $qResult['res_purok'];
                    $res_address = $qResult['res_address'];
                    $res_birthPlace = $qResult['res_birthPlace'];
                    $res_gender = $qResult['res_gender'];
                    $res_civilStatus = $qResult['res_civilStatus'];
                    $res_voterStatus = $qResult['res_voterStatus'];
                    $res_occupation = $qResult['res_occupation'];
                    $res_sector = $qResult['res_sector'];
                    $res_phoneNumber = $qResult['res_phoneNumber'];
                    $res_telephone = $qResult['res_telephone'];
                    $res_email = $qResult['res_email'];
                    $res_religion = $qResult['res_religion'];
                    $res_citizenship = $qResult['res_citizenship'];
                    $res_elementary = $qResult['res_elementary'];
                    $res_highSchool = $qResult['res_highSchool'];
                    $res_college = $qResult['res_college'];
                }
        session_start();
        $_SESSION['res_lastName'] = $res_lastName;
        $_SESSION['res_firstaName'] = $res_firstaName;
        $_SESSION['res_middleName'] = $res_middleName;
        $_SESSION['res_alias'] = $res_alias;
        $_SESSION['res_spouseName'] = $res_spouseName;
        $_SESSION['res_password'] = $res_password;
        $_SESSION['res_birthMonth'] = $res_birthMonth;
        $_SESSION['res_birthDate'] = $res_birthDate;
        $_SESSION['res_birthYear'] = $res_birthYear;
        $_SESSION['res_age'] = $res_age;
        $_SESSION['res_purok'] = $res_purok;
        $_SESSION['res_address'] = $res_address; 
        $_SESSION['res_birthPlace'] = $res_birthPlace;
        $_SESSION['res_gender'] = $res_gender;
        $_SESSION['res_civilStatus'] = $res_civilStatus;
        $_SESSION['res_voterStatus'] = $res_voterStatus;
        $_SESSION['res_occupation'] = $res_occupation;
        $_SESSION['res_sector'] = $res_sector;
        $_SESSION['res_phoneNumber'] = $res_phoneNumber;
        $_SESSION['res_telephone'] = $res_telephone;
        $_SESSION['res_email'] = $res_email;
        $_SESSION['res_religion'] = $res_religion;
        $_SESSION['res_citizenship'] = $res_citizenship;
        $_SESSION['res_elementary'] = $res_elementary;
        $_SESSION['res_highSchool'] = $res_highSchool;
        $_SESSION['res_college'] = $res_college;
        header('Location: ResidentDashboard.php');
    }
    else if (mysqli_num_rows($res_info) < 1){
        echo '<script>alert("Wrong username or Password.")
        window.location.href=" ResidentPortal_logIn.php";
        </script>';
    }
}


if(isset($_POST['btn_adminRegister']))
{
    $adminRegFirstName = $_POST['adminRegFirstName'];
    $adminRegMiddleName = $_POST['adminRegMiddleName'];
    $adminRegLastName = $_POST['adminRegLastName'];
    $adminRegUsername = $_POST['adminRegUsername'];
    $adminRegPosition = $_POST['adminRegPosition'];
    $admin_regpassword = $adminRegLastName.$adminRegFirstName;
    $adminRegBirthday = $_POST['adminRegBirthday'];
    $adminRegEmail= $_POST['adminRegEmail'];

    $admin_sql ="INSERT INTO admin_info (adminFirstName, adminMiddleName, adminLastname,adminUsername,
    adminBirthday,	adminPosition, adminEmail, adminPassword)
    VALUES('$adminRegFirstName', '$adminRegMiddleName', '$adminRegLastName','$adminRegUsername ', 
    '$adminRegBirthday', '$adminRegPosition','$adminRegEmail', '$admin_regpassword');";
   
    mysqli_query($conn, $admin_sql);
  
    header('Location: AdminPortal_logIn.php');
}


if(isset($_POST['btn_adminLogin']))
{
    $admin_loginUserName= $_POST['admin_loginUserName'];
    $admin_loginPassword= $_POST['admin_loginPassword'];
    $admin_sql= "SELECT * FROM admin_info WHERE adminUsername='$admin_loginUserName' AND adminPassword='$admin_loginPassword'";
    $admin_info = mysqli_query($conn, $admin_sql);
    header('Location: AdminDashboard.php');
    
    if (mysqli_num_rows($admin_info) == 1)
    {
        while($qResult = mysqli_fetch_assoc($admin_info))
        {

        header('Location: AdminDashboard.php');
        }
    }
}

if(isset($_POST['btnAdminView']))
{
    $value = $_POST["btnAdminView"]; 
    $admin_value= "SELECT * FROM admin_info WHERE id='$value'";
    $admin_in = mysqli_query($conn, $admin_value);
    if (mysqli_num_rows($admin_in) == 1)
    {
        while($qResult = mysqli_fetch_assoc($admin_in))
        {

        header('Location: AdminResidentRecords.php');
        }
    }
    
}

if(isset($_POST['btnres_save']))
{
    $res_profilecivilStatus = $_POST['res_profilecivilStatus'];
    $res_profilespouseName = $_POST['res_profilespouseName'];
    $res_profilereligion = $_POST['res_profilereligion'];
    $res_profilecitizenship = $_POST['res_profilecitizenship'];
    $res_profileVoterStatus = $_POST['res_profileVoterStatus'];
    $res_profileOccupation = $_POST['res_profileOccupation'];
    $res_profileSector = $_POST['res_profileSector'];
    $res_profileAddress = $_POST['res_profileAddress'];
    $res_profilePurok = $_POST['res_profilePurok'];
    $res_profilecellphone_number = $_POST['res_profilecellphone_number'];
    $res_profiletelephone_number = $_POST['res_profiletelephone_number'];
    $res_profileusername = $_POST['res_profileusername'];
    $res_profileemail = $_POST['res_profileemail'];
    $res_profilelastname = $_POST['res_profilelastname'];

    $new = "UPDATE resident_info SET res_alias = '$res_profileusername', res_spouseName = '$res_profilespouseName', 
    res_purok = '$res_profilePurok',
    res_address = '$res_profileAddress', res_civilStatus = '$res_profilecivilStatus', res_voterStatus = '$res_profileVoterStatus',
    res_occupation = '$res_profileOccupation', res_sector = '$res_profileSector', res_phoneNumber = '$res_profilecellphone_number',
    res_telephone = '$res_profiletelephone_number',  res_email = '$res_profileemail', 
    res_religion = '$res_profilereligion', res_citizenship = '$res_profilecitizenship'
    WHERE res_lastName = '$res_profilelastname';";
    mysqli_query($conn, $new);
    header("Location: ResidentProfile.php");
}
if(isset($_POST['btnInfoDelete']))
{
    echo '<script>alert("Bye Bye!.") </script>';
    $res_email = $_POST['$res_profileemail'];
    $res_lastName = $_POST['res_profilelastname'];
    $delete = "DELETE FROM resident_info WHERE res_email = '$res_email' AND res_lastName = '$res_lastName';";
    mysqli_query($conn, $delete);
    header("Location: index.php");
}

if(isset($_POST['btn_brgySettings']))
{
    $brgy_Name = $_POST['$brgy_bName'];
    $brgy_Number = $_POST['$brgy_cNumber'];
    $brgy_email = $_POST['$brgy_Email'];
    $brgy_Municipality = $_POST['$brgy_bMunicipality'];
    $newDetails = "UPDATE brngy_info SET brgy_Name ='$brgy_Name', brgy_Number = '$brgy_Number', brgy_email = '$brgy_email'
    WHERE brgy_Municipality = '$brgy_Municipality'";
    mysqli_query($conn, $newDetails);
    header("Location: AdminBarangaySettings.php");
}

if(isset($_POST['btn_brgyViews']))
{
    $brgy_Municipality = $_POST['btn_brgyViews'];
    $details = "SELECT * FROM brngy_info WHERE brgy_Municipality = '$brgy_Municipality'";
    $brngy_details = mysqli_query($conn, $details);
    if (mysqli_num_rows($brngy_details) == 1){
        while($qResult = mysqli_fetch_assoc($brngy_details)){
                    $brgy_Name = $qResult['brgy_Name'];
                    $brgy_Municipality = $qResult['brgy_Municipality'];
                    $brgy_Province = $qResult['brgy_Province'];
                    $brgy_Number= $qResult['brgy_Number'];
                    $brgy_email = $qResult['brgy_email'];
        }
        session_start();
        $_SESSION['brgy_Name'] = $brgy_Name;
        $_SESSION['brgy_Municipality'] = $brgy_Municipality;
        $_SESSION['brgy_Province'] = $brgy_Province;
        $_SESSION['brgy_Number'] = $brgy_Number;
        $_SESSION['brgy_email'] = $brgy_email;
        header('Location: "AdminBarangaySettings.php"');
}
}

if(isset($_POST['btnCreateClearance']))
{
    $res_id = $_POST['btnCreateClearance'];
    $clearance_dets = "SELECT * FROM resident_info WHERE user_id = '$res_id'";
    $clear_details = mysqli_query($conn, $clearance_dets);
    if (mysqli_num_rows($clear_details) > 0){
        while($qResult = mysqli_fetch_assoc($clear_details)){
            $lastName = $qResult['res_lastName'];
            $firstName = $qResult['res_firstaName'];
            $middleName = $qResult['res_middleName'];
        }
        session_start();
        $_SESSION['res_lastName'] = $lastName;
        $_SESSION['res_firstName'] = $firstName;
        $_SESSION['res_middleName'] = $middleName;
        header('Location: "BarangayClearance.php"');
}
}
if(isset($_POST['btnCreateResidency']))
{

    $res_id = $_POST['btnCreateResidency'];
    $resident_dets = "SELECT * FROM resident_info WHERE user_id = '$res_id'";
    $res_details = mysqli_query($conn, $resident_dets);
    if (mysqli_num_rows($res_details) > 0){
        while($qResult = mysqli_fetch_assoc($res_details)){
            $lastName = $qResult['res_lastName'];
            $firstName = $qResult['res_firstaName'];
            $middleName = $qResult['res_middleName'];
        }
        session_start();
        $_SESSION['res_lastName'] = $lastName;
        $_SESSION['res_firstName'] = $firstName;
        $_SESSION['res_middleName'] = $middleName;
        header('Location: "ResidencyCertificate.php"');
}
}