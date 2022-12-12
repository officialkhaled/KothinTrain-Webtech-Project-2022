function isValid(pForm) {
  const username = pForm.username.value;
  const password = pForm.password.value;
  document.getElementById("unameMsg").innerHTML = "";
  document.getElementById("passMsg").innerHTML = "";

  Alert();
  let isValid = true;

  if (email === "") {
    document.getElementById("unameMsg").innerHTML =
      "*Username cannot be empty <br> ";
    isValid = false;
  } else {
    const pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    if (!pattern.test(username)) {
      document.getElementById("unameMsg").innerHTML =
        "*Username is not valid <br> ";
      isValid = false;
    }
  }
  if (password === "") {
    document.getElementById("passMsg").innerHTML =
      "*Password cannot be empty <br>";
    isValid = false;
  }

  if (!isValid) return false;

  return true;
}

function Alert() {
  alert("The form is submitted");
}
