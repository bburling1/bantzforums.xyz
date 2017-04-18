<?php
//create a function to retrieve the total number of matching usernames
function count_username($username)
{
  global $conn;
  $sql = 'SELECT * FROM users WHERE user_name = :user_name';
  $statement = $conn->prepare($sql);
  $statement->bindValue(':user_name', $user_name);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();
  return $count;
}

function add_user($user_name, $email, $password, $salt)
{
 global $conn;
 $sql = "INSERT INTO users (user_name, email, password, salt) VALUES (:user_name, :email, :password, :salt)";
 $statement = $conn->prepare($sql);
 $statement->bindValue(':user_name', $user_name);
 $statement->bindValue(':email', $email);
 $statement->bindValue(':password', $password);
 $statement->bindValue(':salt', $salt);
 $result = $statement->execute();
 $statement->closeCursor();
 return $result;
}
?>
