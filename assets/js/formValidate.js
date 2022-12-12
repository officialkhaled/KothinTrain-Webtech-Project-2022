function validateLoginForm() {
  var x = document.forms["myForm"]["username"].value;
  var y = document.forms["myForm"]["password"].value;

  let errUser = (document.getElementById("unameMsg").innerHTML = "");
  let errPass = (document.getElementById("passMsg").innerHTML = "");

  if (x == "") {
    errUser = document.getElementById("unameMsg").innerHTML =
      "Username cannot be empty";
    return false;
  } else if (y == "") {
    errPass = document.getElementById("passMsg").innerHTML =
      "Password cannot be empty";
    return false;
  } else if (x == "" && y == "") {
    errUser = document.getElementById("unameMsg")[0].innerHTML =
      "Username cannot be empty";
    errPass = document.getElementById("passMsg")[0].innerHTML =
      "Password cannot be empty";
    return false;
  }
}
