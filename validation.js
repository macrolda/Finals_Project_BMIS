function loginValidation()
{
  var loginUsername = document.forms["residentPortal"]["loginUser"];
  var loginPassword = document.forms["residentPortal"]["loginUser"];

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