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

<link rel="icon" type="image/png" sizes="32x32" href="image/logo_1.png">
<link type="text/css" href="css/ResidentDashboard.css" rel="stylesheet">
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

                <li class="list">
                    <a href="ResidentProfile.php">
                        <span class="icon">
                            <ion-icon name="person-outline"><ion-icon>    
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li class="list hovered">
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
            <div class="topbar">
                <!-- search C-->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- userImg -->
                <div class="user">
                    <img  src="image/default_img.png">
                </div>
            </div>
            <!-- userProfile-->

            <br></br>
            <br></br>
        <div class="card">
            <div class="box">
                <div class="content" onclick="location='permit_print.php'">
                    <h2>01</h2>
                    <h3>Permit</h3>
                    <p>Barangay Tabunok's Barangay Permit</p>
                </div>
            </div>
        </div>

             <br></br>

        <div class="card">
            <div class="box">
                <div class="content" onclick="location='residency_print.php'">
                    <h2>02</h2>
                    <h3>Certificate of Indigency</h3>
                    <p>Barangay Tabunok's Certificate of Residency</p>
                </div>
            </div>
        </div>
        
             <br></br>

        <div class="card">
            <div class="box">
                <div class="content" onclick="location='clearance_print.php'">
                    <h2>03</h2>
                    <h3>Clearance</h3>
                    <p>Barangay Tabunok's Barangay Clearance</p>
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
<script type="text/javascript">
    $(document).ready(function(){

        $('.title').click(function(){
            $(this).next('.sub-menu').slideToggle();
        });
    });
</script>
<!---SCRIPTS--->
</body>
</html>