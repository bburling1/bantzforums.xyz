// Open the modal
function showloginmodal() {
  var x = document.getElementById('loginmodal');
  x.className = "modal is-active";
  console.log('Modal Opened');
}

// Close the modal from x
function closemodal() {
  var x = document.getElementById('loginmodal');
  x.className = 'modal';
  console.log('Modal Closed');
}


// Confirmation of Password in Registration Form
function confirm_password() {
  var notification = document.getElementById("registernotification");
  var password = document.getElementById("password");
  var password_confirm = document.getElementById("password_confirm");
  var ok = true;
  if (password.value != password_confirm.value){
    notification.innerHTML = "Passwords do not match";
    password.className = "input is-danger";
    password_confirm.className = "input is-danger";
    ok = false;
    console.log(password);
    console.log(password_confirm);
  } else {
    console.log(password);
    ok = true;
  }
  return ok;
}
