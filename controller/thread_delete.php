<?php
	//start session management
	session_start();
	//connect to the database
	require('../model/database.php');
	require('../model/functions_threads.php');


	//retrieve the productID from the URL
	$thread_id = $_GET['thread_id'];
  $user_id = $_GET['user_id'];

	//call the delete_product() function
	$result = delete_thread($thread_id);

	//create user messages
	if($result){
		//if product is successfully added, create a success message to display on the products page
		$_SESSION['success'] = 'Thread successfully deleted.';
		//redirect to products.php
		header("location:../view/admin_usercontrol.php?user_id=$user_id");
	}else{
		//if product is not successfully added, create an error message to display on the add product page
		$_SESSION['error'] = 'An error has occurred. Please try again.';
		//redirect to product_add_form.php
		header("location:../view/admin_usercontrol.php?user_id=$user_id");
	}
?>
