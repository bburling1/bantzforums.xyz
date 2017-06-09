//admin User Search
function showResult(str) {
  if (str.length==0) {
    document.getElementById("usersearch").innerHTML="";
    document.getElementById("usersearch").style.border="0px";
    return;
  }

  document.getElementById("usersearch").innerHTML = '';
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      var data = JSON.parse(this.responseText);

      for(var i = 0; i < data.length; i++) {
        console.log(data[i].username);
        var user = document.createElement('div');
        user.innerHTML = "<a href='../view/admin_usercontrol.php?user_id=" + data[i].user_id + "'>" + data[i].username + "</a>";
        document.getElementById('usersearch').appendChild(user);

      }

      //document.getElementById("usersearch").innerHTML=this.responseText;
      document.getElementById("usersearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","../controller/usersearch.php?q="+str,true);
  xmlhttp.send();
}


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
  var notification = document.getElementById("passwordnotification");
  var password = document.getElementById("password");
  var password_confirm = document.getElementById("password_confirm");
  if (password.value != password_confirm.value){
    notification.innerHTML = "Passwords do not match";
    password.className = "input is-danger";
    password_confirm.className = "input is-danger";
    document.getElementById("registersubmit").disabled = true;
  } else {
    password.className = "input is-success";
    password_confirm.className = "input is-success";
    notification.innerHTML = "";
    document.getElementById("registersubmit").disabled = false;
  }
}




// AJAX Check Username and email
function checkusername(){
  var str = document.getElementById('username').value;
  var notification = document.getElementById("usernamenotification");
  if (str.length == 0){
    document.getElementById("username").className = "input";
  } else if (str.length < 6) {
    document.getElementById("username").className = "input is-danger";
    notification.innerHTML = "Username must be longer than 5 letters";
    notification.className = "help is-danger";
    document.getElementById("registersubmit").disabled = true;
  } else {
    var xmlhttp = new XMLHttpRequest();
    var data = "username="+str;
    xmlhttp.open("POST", "../controller/check_form_data.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        var return_data = this.responseText;
        if(return_data == "usernameOK"){
          document.getElementById("username").className = "input is-success";
          notification.innerHTML = "Username is available";
          notification.className = "help is-success";
          document.getElementById("registersubmit").disabled = false;
          console.log(return_data);
        } else {
          document.getElementById("username").className = "input is-danger";
          notification.innerHTML = "Username is not available";
          notification.className = "help is-danger";
          document.getElementById("registersubmit").disabled = true;
          console.log(return_data);
        }
      }
    }
    xmlhttp.send(data);
  }
}

function checkemail(){
  var str = document.getElementById('email').value;
  var notification = document.getElementById("emailnotification");
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (str.length == 0){
    document.getElementById("email").className = "input";
  } else if (re.test(str) == false){
    console.log("Email invalid");
    document.getElementById("email").className = "input is-danger";
    notification.innerHTML = "Email is invalid";
    notification.className = "help is-danger";
    document.getElementById("registersubmit").disabled = true;
  } else {
    var xmlhttp = new XMLHttpRequest();
    var data = "email="+str;
    xmlhttp.open("POST", "../controller/check_form_data.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        var return_data = this.responseText;
        if(return_data == "emailOK"){
          document.getElementById("email").className = "input is-success";
          notification.innerHTML = "Email is not in use";
          notification.className = "help is-success";
          document.getElementById("registersubmit").disabled = false;
          console.log(return_data);
        } else {
          document.getElementById("email").className = "input is-danger";
          notification.innerHTML = "Email is already in use";
          notification.className = "help is-danger";
          document.getElementById("registersubmit").disabled = true;
          console.log(return_data);
        }
      }
    }
    xmlhttp.send(data);
  }
}

// Change profile tab in profile.php
$( function() {
   $( "#tabs" ).tabs({
     beforeLoad: function( event, ui ) {
       ui.jqXHR.fail(function() {
         ui.panel.html(
           "Couldn't load this tab");
       });
     }
   });
 } );

//Enable submit after file has been selected
 $(document).ready(
  function(){
    $('input:file').change(
      function(){
        if ($(this).val()) {
          $('input:submit').attr('disabled',false);
        }
      }
      );
  });

//Login form using Jquery and 3rd party JS component
  // wait for the DOM to be loaded
  $(document).ready(function() {
    // bind 'myForm' and provide a simple callback function
    $('#loginform').ajaxForm(function(data) {
        location.reload();

    });
  });

// Display reply to thread post after submit
$(function () {
  $('#replyform').on('submit', function (e){
    e.preventDefault();
    $.ajax({
      type:'post',
      url: '../controller/reply_add_process.php',
      data: $('form').serialize(),
      success: function (){
        console.log('form was submitted');
      }
    }).done(function(response){
      $("#response").html(response);
      document.getElementById("response").style.display = 'block';
    })
  })
})
