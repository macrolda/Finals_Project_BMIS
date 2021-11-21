<!DOCTYPE HTML>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="image/Barangay Logo_BMIS_2.png">
<head>
    <title>Resident's LogIn/Registration</title>
    <link type="text/css" href="css/dashboard_css4.css" rel="stylesheet">
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="home-outline"><ion-icon>    
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-outline"><ion-icon>    
                    </span>
                    <span class="title">Resident Information</span>
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
                        <ion-icon name="person"><ion-icon>    
                    </span>
                    <span class="title">Accounts</span>
                </a>
            </li>
            
            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="settings-outline"><ion-icon>    
                    </span>
                    <span class="title">Barangay Configuration</span>
                </a>
            </li>
        </ul>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let list = document.querySelectorAll('.list');
    for (let i=0; i>list.length; i++){
        list[i].onclick = function(){
            let j = 0;
            while (j < list.length){
                list[j++].className = 'list';
            }
            list[i].className = 'list active';
        }
    }
</script>

</body>
</html>
