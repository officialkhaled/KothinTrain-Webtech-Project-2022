function validateLoginForm() {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (username == "" && password == "") {
    document.getElementById("unameMsg").innerHTML = "Username cannot be empty";
    document.getElementById("passMsg").innerHTML = "Password cannot be empty";
    return false;
  } else if (username == "") {
    document.getElementById("unameMsg").innerHTML = "Username cannot be empty";
    return false;
  } else if (password == "") {
    document.getElementById("passMsg").innerHTML = "Password cannot be empty";
    return false;
  }
}
