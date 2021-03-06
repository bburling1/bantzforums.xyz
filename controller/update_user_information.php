<?php
	//start session management
	session_start();
	//connect to the database
	require('../model/database.php');
	//retrieve the functions
	require('../model/functions_users.php');

	//retrieve the registration details into the form
	$user_id = $_POST['user_id'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//START SERVER-SIDE VALIDATION
	//check if the password is a minimum of 8 characters long
	if (strlen($password) < 8)
	{
		//if password is less than 8 characters intialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'Password must be 8 characters or more.';
		//redirect to the registration page to display the message
		header("location:../view/profile.php");
		exit();
	}
	//check if all required fields have data
	elseif (empty($user_id) || empty($email) || empty($password))
	{
		//if required form fields are blank intialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'All * fields are required.';
		//redirect to the registration page to display the message
		header("location:../view/profile.php");
		exit();
	}
	//check if the email is valid
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		//if the email is not valid intialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'Please enter a valid email address.';
		//redirect to the registration page to display the message
		header("location:../view/profile.php");
		exit();
	}


	//END SERVER-SIDE VALIDATION

	//generate a random salt value using the MD5 encryption method and the PHP uniqid() and rand() functions
	$salt = md5(uniqid(rand(), true));

	//encrypt the password (with the concatenated salt) using the SHA256 encryption method and the PHP hash() function
	$password = hash('sha256', $password.$salt); //generate the hashed password with the salt value

	//call the add_user() function
	$result = update_user($user_id, $email, $password, $salt);

	//create user messages
	if($result)
	{
		//if product is successfully added, create a success message to display on the products page
		$_SESSION['success'] = 'Information Sucessfully Updated';
		//redirect to products.php
		header('location:../view/profile.php');
	}
	else
	{
		//if product is not successfully added, create an error message to display on the add product page
		$_SESSION['error'] = 'An error has occurred. Please try again.';
		//redirect to product_add_form.php
		header('location:../view/profile.php');
	}
?>
