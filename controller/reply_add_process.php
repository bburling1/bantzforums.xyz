<?php
	//start session management
	session_start();
	//connect to the database
	require('../model/database.php');
	require('../model/functions_categories.php');
  require('../model/functions_threads.php');
	require('../model/functions_users.php');

	//retrieve the data that was entered into the form fields using the $_POST array
	$content = $_POST['content'];
  $thread_id = $_POST['thread_id'];
	$user_id = $_POST['user_id'];
	$created = $_POST['created'];

	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($content) || empty($thread_id) || empty($user_id) || empty($created))
	{
		//if required fields are empty initialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = "Error submitting reply";
		//redirect to the category_add_form page to display the message
		header("location:../view/post.php?thread_id=$thread_id");
		exit();
	} else {
		//END SERVER-SIDE VALIDATION

		//call the add_thread() function
		$result = add_reply($content, $thread_id, $user_id, $created);

		//create user messages
		if($result)
		{
			//if category is successfully added, create a success message to display on the threads page
			$_SESSION['success'] = 'Reply successfully added.';
			$username = get_username_by_user_id($user_id);
			$avatar = get_user_avatar($user_id);
			//redirect to threads.php
			// header("location:../view/post.php?thread_id=$thread_id");
			echo "<div class=\"box\" id=\"threadbox\">
				      <article class=\"media\">
				        <div class=\"media-left\">
				          <h6 class=\"subtitle has-text-centered\"><strong>$username[0]</strong></h6>
				          <figure class=\"image is-128x128\">
                    <img src=\"../view/images/$avatar[0]\" alt=\"Profile Picture\">
                  </figure>
				        </div>
				        <div class=\"media-content\">
				          <div class=\"content box\">
				             <p>$content</p>
				          </div>
				        </div>
				      </article>
				    </div>";
		}
		else
		{
			//if category is not successfully added, create an error message to display on the add thread page
			$_SESSION['error'] = "Error submitting reply";
			//redirect to threads.php
			// header("location:../view/post.php?thread_id=$thread_id");
			echo "Error";
		}
	}
?>
