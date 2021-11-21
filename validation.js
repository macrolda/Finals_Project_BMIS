function loginValidation()
{
  var loginUsername = document.forms["residentPortal"]["residentUsernameLogIn"];
  var loginPassword = document.forms["residentPortal"]["residentPasswordLogIn"];

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

