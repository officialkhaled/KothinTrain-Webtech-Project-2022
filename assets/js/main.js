function validateForm() {
  let msgUser = document.getElementsByClassName("msgUser").value;
  let msgPass = document.getElementsByClassName("msgPass").value;
  let msgEmail = document.getElementsByClassName("msgEmail").value;
  let msgType = document.getElementsByClassName("msgType").value;

  if (msgUser == "") {
    document.getElementsByClassName("msgUser").innerHTML =
      "Please enter your username";
    return false;
  } else if (msgPass == "") {
    document.getElementsByClassName("msgPass").innerHTML =
      "Please enter your password";
    return false;
  } else if (msgEmail == "") {
    document.getElementsByClassName("msgEmail").innerHTML =
      "Please enter your email";
    return false;
  } else if (msgType == "") {
    document.getElementsByClassName("msgType").innerHTML =
      "Please select your usertype";
    return false;
  } else if (msgUser != "" && msgPass != "" && msgEmail != "") {
    //alert("Thank you for your message!");
    document.getElementsByClassName("msgUser").innerHTML = "";
    document.getElementsByClassName("msgPass").innerHTML = "";
    document.getElementsByClassName("msgEmail").innerHTML = "";
    return true;
  }
}

document
  .getElementById("username")
  .addEventListener("change", function (event) {
    let value = event.target.value;

    if (value == "") {
      document.getElementById("msgUser").innerHTML =
        "Please enter your username";
    } else if (value.length < 2) {
      document.getElementById("msgUser").innerHTML =
        "Username must be at least 2 characters";
    } else if (value != "" && value.length >= 2) {
      document.getElementById("msgUser").innerHTML = "";
    }

    console.log(value);
  });
