function validateForm() {
  let error = document.getElementsByClassName("error-msg").value;

  if (error == "") {
    document.getElementsByClassName("error-msg").innerHTML =
      "Please enter your username";
    return false;
  } else if (error == "") {
    document.getElementsByClassName("error-msg").innerHTML =
      "Please enter your password";
    return false;
  } else if (error == "") {
    document.getElementsByClassName("error-msg").innerHTML =
      "Please select your usertype";
    return false;
  } else {
    return true;
  }
}
