// Validate Login Form
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

// Validate Registration Form
function validateRegistrationForm() {
  let name = document.getElementById("name").value;
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let cpassword = document.getElementById("cpassword").value;

  if (name == "" && username == "" && password == "" && cpassword == "") {
    document.getElementById("nameErr").innerHTML = "Name cannot be empty";
    document.getElementById("unameErr").innerHTML = "Username cannot be empty";
    document.getElementById("passErr").innerHTML = "Password cannot be empty";
    document.getElementById("cpassErr").innerHTML =
      "Confirm Password cannot be empty";
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
  } else if (password != cpassword) {
    document.getElementById("cpassErr").innerHTML =
      "Password and Confirm Password must be same";
    return false;
  }
}

// Show Password
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

// Validate Search Form
function searchValidate() {
  let search = document.getElementById("search").value;

  if (search == "") {
    document.getElementById("searchErr").innerHTML =
      "Search cannot be empty! <br> Please enter a valid search keyword";
    return false;
  }
}

// Validate Update Form
function validateUpdateForm() {
  let name = document.getElementById("name").value;
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (name == "" && username == "" && password == "") {
    document.getElementById("nameErr").innerHTML = "Name cannot be empty";
    document.getElementById("unameErr").innerHTML = "Username cannot be empty";
    document.getElementById("passErr").innerHTML = "Password cannot be empty";
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
  }
}
