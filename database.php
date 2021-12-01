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
    $res_regcellphone_number = $_POST['res_regcellphone_number'];
    $res_regtelephone_number = $_POST['res_regtelephone_number'];
    $res_regemail = $_POST['res_regemail'];
    $res_regreligion = $_POST['res_regreligion'];
    $res_regcitizenship = $_POST['res_regcitizenship'];
    $res_regElementary = $_POST['res_regElementary'];
    $res_reghighSchool= $_POST['res_reghighSchool'];
    $res_regCollege = $_POST['res_regCollege'];

    if(strlen($res_regcellphone_number) != 11 )
    {
        $alert = '<script>alert("enter your contact number");
                 window.location.href="ResidentRegister.php";</script>';
        echo $alert;
    }

    $sql ="INSERT INTO resident_info (res_lastName, res_firstaName, res_middleName, res_alias,	res_spouseName, res_password, res_birthMonth,
     res_birthDate, res_birthYear, res_age, res_purok, res_address, res_birthPlace, res_gender, res_civilStatus, res_voterStatus, res_phoneNumber, res_telephone, res_email,
     res_religion, res_citizenship, res_elementary, res_highSchool, res_college)
    VALUES('$res_reglastname', '$res_regfirstname', '$res_regmiddleName', '$res_regusername', '$res_regspouseName','$res_regpassword', '$res_regbirthMonth', 
    '$res_regbirthDay', '$res_regbirthYear','$res_regAge', '$res_regPurok','$res_regaddress','$res_regbirthPlace', '$res_regSex', '$res_regcivilStatus', '$res_regVoterStatus', 
    '$res_regcellphone_number','$res_regtelephone_number', '$res_regemail','$res_regreligion','$res_regcitizenship','$res_regElementary','$res_reghighSchool,'$res_regCollege');";

    mysqli_query($conn, $sql);

    header('Location: index.php');
}


if(isset($_POST['res_logIn']))
{
    $res_logIn_Username = $_POST['res_logIn_Username'];
    $res_logIn_password = $_POST['res_logIn_password'];
    $res_sql= "SELECT * FROM resident_info WHERE res_alias='$res_logIn_Username' AND res_password='$res_logIn_password'";
    $res_info = mysqli_query($conn, $res_sql);
    if (mysqli_num_rows($res_info) == 1){
        while($qResult = mysqli_fetch_assoc($res_info)){
            $res_reglastname = $qResult['res_lastname'];
            $res_regfirstname = $qResult['res_firstname'];
            $res_regmiddleName = $qResult['res_middleName'];
            $res_regusername = $qResult['res_alias'];
            $res_regspouseName = $qResult['res_spouseName'];
            $res_regpassword = $qResult['res_password'];
            $res_regbirthMonth = $qResult['res_birthMonth'];
            $res_regbirthDay = $qResult['res_birthDay'];
            $res_regbirthYear = $qResult['res_birthYear'];
            $res_regAge = $qResult['res_age'];
            $res_regPurok = $qResult['res_purok'];
            $res_regaddress = $qResult['res_address'];
            $res_regbirthPlace = $qResult['res_birthPlace'];
            $res_regSex = $qResult['res_gender'];
            $res_regcivilStatus = $qResult['res_civilStatus'];
            $res_regVoterStatus = $qResult['res_voterStatus'];
            $res_regcellphone_number = $qResult['res_phoneNumber'];
            $res_regtelephone_number = $qResult['res_telephone'];
            $res_regemail = $qResult['res_email'];
            $res_regusername = $qResult['res_alias'];
            $res_regreligion = $qResult['res_religion'];
            $res_regcitizenship = $qResult['res_citizenship'];
            $res_regElementary = $qResult['res_elementary'];
            $res_reghighSchool= $qResult['res_highSchool'];
            $res_regCollege = $qResult['res_College'];
                }

        session_start();
        $_SESSION['res_lastname'] = $res_reglastname;
        $_SESSION['res_firstname'] = $res_regfirstname;
        $_SESSION['res_middleName'] = $res_regmiddleName;
        $_SESSION['res_alias'] = $res_regusername;
        $_SESSION['res_spouseName'] = $res_regspouseName;
        $_SESSION['res_password'] = $res_regpassword ;
        $_SESSION['res_birthMonth'] = $res_regbirthMonth;
        $_SESSION['res_birthDay'] = $res_regbirthDay;
        $_SESSION['res_birthYear'] = $res_regbirthYear;
        $_SESSION['res_age'] = $res_regAge;
        $_SESSION['res_purok'] = $res_regPurok ;
        $_SESSION['res_address'] = $res_regaddress;
        $_SESSION['res_birthPlace'] = $res_regbirthPlace;
        $_SESSION['res_gender'] = $res_regSex ;
        $_SESSION['res_civilStatus'] = $res_regcivilStatus;
        $_SESSION['res_voterStatus'] = $res_regVoterStatus ;
        $_SESSION['res_phoneNumber'] = $res_regcellphone_number;
        $_SESSION['res_telephone'] =  $res_regtelephone_number ;
        $_SESSION['res_email'] = $res_regemail;
        $_SESSION['res_religion'] =$res_regreligion ;
        $_SESSION['res_citizenship'] =$res_regcitizenship ;
        $_SESSION['res_elementary'] = $res_regElementary ;
        $_SESSION['res_highSchool'] = $res_reghighSchool;
        $_SESSION['res_College'] = $res_regCollege ;
        header('Location: ResidentDashboard.php');
    }
    else if (mysqli_num_rows($res_info) < 1){
        echo '<script>alert("User Name or Password.")
        window.location.href="ResidentPortal_login.php";
        </script>';
    }
}