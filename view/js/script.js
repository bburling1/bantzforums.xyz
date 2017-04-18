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
