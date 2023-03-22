<?php


session_start();
require_once 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

if (!empty($username) && !empty($password)) {
    if (loginfn($username, $password, $db)) {
        $_SESSION["user"] = $username;
        header("Location: index.php");
    } else {
        echo 'Heslo není správné.';
    }
}
else {
    echo 'Nejsou vyplněna všechna pole.';
}
function loginfn(string $username, string $password, $db): bool {
    $query = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $query->execute([$username, md5($password)]);
    $users = $query->fetchAll();
    if(!empty($users)) {
        return true;
    }
    return false;
}