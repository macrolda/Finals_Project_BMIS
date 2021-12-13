function loginValidation()
{
  var loginUsername = document.forms["residentPortal"]["res_logIn_Username"];
  var loginPassword = document.forms["residentPortal"]["res_logIn_password"];

  if (loginUsername == "")
  {
    window.alert("Input Username");
    return false;
  }
  if (loginPassword == "")
  {
    window.alert("Input Password");
    return false;
  }
}

function forgotPassValidation()
{
  var res_email = document.forms["res_forgotPassword"]["res_email"];
  var res_fpassword = document.forms["res_forgotPassword"]["res_newPassword"];
  var res_fconfirm = document.forms["res_forgotPassword"]["res_confirmPassword"];

  if (res_fpassword.value != res_confirmPassword.value)
  {
    window.alert("Password Don't Match");
    return false;
  }
}

function regValidation() 
{
  var email = document.forms["res_register"]["res_regemail"];
  var parts = email.value.split("@");

  if (email.value == "")
  {
    window.alert("Please enter your e-mail.");
    return false;
  } 
  else if (parts.length === 2)
  {
    console.log(parts[1]);
    if (parts[1] === "gmail.com" || parts[1] === "yahoo.com")
      {
        return true;
      } 
    else
    {
      window.alert("Invalid domain. (use @gmail.com or @yahoo.com");
      return false;
    }
  } 
  else {
    window.alert("E-mail error.");
    return false;
  }
}

function regAdminValidation() 
{
  var email = document.forms["admin_registrationForm"]["adminRegEmail"];
  var parts = email.value.split("@");

  if (email.value == "")
  {
    window.alert("Please enter your e-mail.");
    return false;
  } 
  else if (parts.length === 2)
  {
    console.log(parts[1]);
    if (parts[1] === "gmail.com" || parts[1] === "yahoo.com")
      {
        return true;
      } 
    else
    {
      window.alert("Invalid domain. (use @gmail.com or @yahoo.com");
      return false;
    }
  } 
  else {
    window.alert("E-mail error.");
    return false;
  }
}

$(document).ready(function() {

    
  var readURL = function(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('.avatar').attr('src', e.target.result);
          }
  
          reader.readAsDataURL(input.files[0]);
      }
  }
  

  $(".file-upload").on('change', function(){
      readURL(this);
  });
});

function loginAdminValidation()
{
  var loginUsername = document.forms["adminLogIn"]["admin_loginUserName"];
  var loginPassword = document.forms["adminLogIn"]["admin_loginPassword"];

  if (loginUsername == "")
  {
    window.alert("Input Username");
    return false;
  }
  if (loginPassword == "")
  {
    window.alert("Input Password");
    return false;
  }
}