<?php
session_start();
require_once 'config.php';
require_once 'sign_up.php';
?>
<script src="scripts/errorHandler.js"></script>
<?php

$username = $_POST['username'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

if (!empty($username) && !empty($password) && !empty($repeatPassword)) {
  if (usernameValid($username, $db)) {
    if ($password == $repeatPassword) {
      if (passwordValid($password)) {
        $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?);");
        $stmt->execute([$username, md5($password)]);
        $_SESSION["user"] = $username;
        header("Location: index.php");
      } else {
        ?>
        <script>setErrorMsg("Password is invalid!")</script>
        <?php
      }
    } else {
      ?>
      <script>setErrorMsg("Passwords are not the same!")</script>
      <?php
    }
  } else {
    ?>
    <script>setErrorMsg("This username is already taken!")</script>
    <?php
  }
} else {
  ?>
  <script>setErrorMsg("Not all fields have been filled!")</script>
  <?php
}
function passwordValid(string $password): bool
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

function usernameValid (string $username, $db): bool {
  $query = $db->prepare("SELECT * FROM users WHERE username = ?");
  $query->execute([$username]);
  return $query->rowCount() == 0;
}