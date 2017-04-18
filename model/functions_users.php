<?php
//create a function to retrieve the total number of matching usernames
function count_username($username)
{
  global $conn;
  $sql = 'SELECT * FROM users WHERE username = :username';
  $statement = $conn->prepare($sql);
  $statement->bindValue(':username', $username);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();
  return $count;
}

function add_user($username, $email, $password, $salt)
{
 global $conn;
 $sql = "INSERT INTO users (username, email, password, salt, acc_type) VALUES (:username, :email, :password, :salt, :acc_type)";
 $statement = $conn->prepare($sql);
 $statement->bindValue(':username', $username);
 $statement->bindValue(':email', $email);
 $statement->bindValue(':password', $password);
 $statement->bindValue(':salt', $salt);
 $result = $statement->execute();
 $statement->closeCursor();
 return $result;
}
?>
