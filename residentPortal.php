<!DOCTYPE HTML>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<head>
    <title>Resident's LogIn/Registration</title>
    <link type="text/css" href="css/residentPortal_css2.css" rel="stylesheet">
</head>
<body>
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" name="residentLogInBtn" class="toggle-btn" onclick="logIn()">Log-In</button>
            <button type="button" name="residentRegisterBtn" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <!---LogIn--->
        <form id="logIn"class="input-group">
            <input type="text" class="input-field" name="residentUsernameLogIn" placeholder="Username">
            <input type="password" class="input-field" name="residentPasswordLogIn" placeholder="Password">
            <button type="button" name="residentLogIn" class="submit-btn">Log-In</button>
        </form>

        <!---Registration--->
        <form id="register" class="input-group">
            <input type="text" class="input-field" name="residentUsernameRegistration" placeholder="Username">
            <input type="email" class="input-field" name="residentEmailRegistration" placeholder="Email">
            <input type="password" class="input-field" name="residentPasswordRegistration" placeholder="Password">
            <input type="password" class="input-field" name="residentConfirmPasswordRegistration" placeholder="Confirm Password">
            <button type="button" name="residentRegister" class="submit-btn">Register Account</button>
        </form>
    </div> 
    <script>
        var x = document.getElementById("logIn");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register()
        {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        
        function logIn()
        {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>   