<?php
	
	//create a function to retrieve data for the category dropdown menu
	function get_categories()
	//Retrieves all the categories to display in a dropdown menu
	{
		global $conn;
		$sql = 'SELECT * FROM categories ORDER BY cat_id';		
		//use a prepared statement to enhance security
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		return $result;
	}

	//create a function to retrieve a single category
	function get_category()
	//Retrieves a specific category based on the categoryID provided by the GET method
	{
		global $conn;
		
		//retrieve the categoryID from the URL
		$cat_id = $_GET['cat_id'];
		
		$sql = 'SELECT * FROM categories WHERE cat_id = :cat_id';		
		//use a prepared statement to enhance security
		$statement = $conn->prepare($sql);
		$statement->bindValue(':cat_id', $cat_id);
		$statement->execute();
		//use the fetch() method to retrieve a single row
		$result = $statement->fetch();
		$statement->closeCursor();
		return $result;
	}
?>