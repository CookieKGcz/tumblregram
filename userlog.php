<?php

session_start();
require_once 'config.php';
require_once 'log_in.php';
?>
<script src="scripts/errorHandler.js"></script>
<?php

$username = $_POST['username'];
$password = $_POST['password'];

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

if (!empty($username) && !empty($password)) {
    if (loginfn($username, $password, $db)) {
        $_SESSION["user"] = $username;
        header("Location: index.php");
    } else {
        ?>
            <script>setErrorMsg("Incorrect Password!")</script>
        <?php
    }
}
else {
    ?>
        <script>setErrorMsg("Not all fields have been filled!")</script>
    <?php
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