<?php

session_start();
require_once 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

if (!empty($username) && !empty($password) && !empty($repeatPassword)) {
  if ($password == $repeatPassword) {
    if (isValid($password)) {

      $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?);");
      $stmt->execute([$username, md5($password)]);
      $_SESSION["user"] = $username;
      header("Location: index.php");
    } else {
      echo 'Heslo není validní.';
    }
  } else {
    echo 'Hesla se neshodují.';
  }
} else {
  echo 'Nejsou vyplněna všechna pole.';
}

function isValid(string $password): bool
{
  $pswdLen = strlen($password);
  if ($pswdLen < 8)
    return false;

  $lower = 0;
  $upper = 0;
  $nums = 0;
  for ($i = 0; $i < $pswdLen; $i++) {
    if (ctype_lower($password[$i]))
      $lower++;
    if (ctype_upper($password[$i]))
      $upper++;
    if (ctype_digit($password[$i]))
      $nums++;

    if ($lower > 2 && $upper > 2 && $nums > 2)
      return true;
  }
  return false;
}