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

function validateRegistrationForm() {
  let name = document.getElementById("name").value;
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let cpassword = document.getElementById("cpassword").value;
  let user_type = document.getElementById("user_type").value;

  if (
    name == "" &&
    username == "" &&
    password == "" &&
    cpassword == "" &&
    user_type == ""
  ) {
    document.getElementById("nameErr").innerHTML = "Name cannot be empty";
    document.getElementById("unameErr").innerHTML = "Username cannot be empty";
    document.getElementById("passErr").innerHTML = "Password cannot be empty";
    document.getElementById("cpassErr").innerHTML =
      "Confirm Password cannot be empty";
    document.getElementById("typeErr").innerHTML = "User Type cannot be empty";
    return false;
  } else if (name == "") {
    document.getElementById("nameErr").innerHTML = "Name cannot be empty";
    return false;
  } else if (username == "") {
    document.getElementById("unameErr").innerHTML = "Username cannot be empty";
    return false;
  } else if (password == "") {
    document.getElementById("passErr").innerHTML = "Password cannot be empty";
    return false;
  } else if (cpassword == "") {
    document.getElementById("cpassErr").innerHTML =
      "Confirm Password cannot be empty";
    return false;
  } else if (user_type == "") {
    document.getElementById("typeErr").innerHTML = "User Type cannot be empty";
    return false;
  } else if (password != cpassword) {
    document.getElementById("cpassErr").innerHTML =
      "Password and Confirm Password must be same";
    return false;
  }
}

function SHPassword(x) {
  var checkbox = x.checked;

  if (checkbox) {
    document.getElementById("password").type = "text";
    document.getElementById("showhidepwd").textContent = "Hide Password";
  } else {
    document.getElementById("password").type = "password";
    document.getElementById("showhidepwd").textContent = "Show Password";
  }
}
