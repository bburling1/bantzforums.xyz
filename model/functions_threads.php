<?php

	//create a function to retrieve all products in a specific category
	function get_threads_by_category()
	//Use the GET method to retrieve a category, retrieve all products from that category
	{
		global $conn;

		//retrieve the categoryID from the URL
		$cat_id = $_GET['cat_id'];
		
		//query the database to select all data from the product table
		$sql = 'SELECT * FROM thread WHERE cat_id = :cat_id ORDER BY thread_id';		
		//use a prepared statement to enhance security
		$statement = $conn->prepare($sql);
		$statement->bindValue(':cat_id', $cat_id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		return $result;
	}

?>