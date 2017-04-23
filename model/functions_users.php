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
 $sql = "INSERT INTO users (username, email, password, salt) VALUES (:username, :email, :password, :salt)";
 $statement = $conn->prepare($sql);
 $statement->bindValue(':username', $username);
 $statement->bindValue(':email', $email);
 $statement->bindValue(':password', $password);
 $statement->bindValue(':salt', $salt);
 $result = $statement->execute();
 $statement->closeCursor();
 return $result;
}

function get_username_by_user_id($user_id)
{
  global $conn;
  $sql = "SELECT username FROM users WHERE user_id = :user_id";
  $statement = $conn->prepare($sql);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  //use the fetch() method to retrieve a single row
  $username = $statement->fetch();
  $statement->closeCursor();
  return $username;
}

//create a function to retrieve salt
function retrieve_salt($username)
{
  global $conn;
  $sql = 'SELECT * FROM users WHERE username = :username';
  $statement = $conn->prepare($sql);
  $statement->bindValue(':username', $username);
  $statement->execute();
  $result = $statement->fetch();
  $statement->closeCursor();
  return $result;
}

//create a function to login
function login($username, $password)
{
  global $conn;
  $sql = 'SELECT * FROM users WHERE username = :username AND password = :password';
  $statement = $conn->prepare($sql);
  $statement->bindValue(':username', $username);
  $statement->bindValue(':password', $password);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();
  return $count;
}

function user_permissions($username)
{
  global $conn;
  $sql = 'SELECT acc_type FROM users WHERE username = :username';
  $statement = $conn->prepare($sql);
  $statement->bindValue(':username', $username);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  return $result;
}

?>
