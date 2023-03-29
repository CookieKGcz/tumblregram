<?php
session_start();

require_once "config.php";

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);
$user = $db->query("SELECT * FROM `users` WHERE `username` = '" . $_SESSION['user'] . "';")->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TumblreGram</title>
    <link rel="icon" type="image/x-icon" href="imgs/logo.ico">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/dropdown.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <div class="top-bar flex flex-dir-row">
        <a href="index.php" id="logo">
            <img src="imgs/logo.svg" height="100%">
        </a>
        <form id="search-bar">
            <input id="mag-glass" type="image" src="imgs/Magnifying_glass_icon.svg" alt="Search" height="28px">
            <input id="search-box" type="text" onfocus="setOutline()" onfocusout="removeOutline()" placeholder="Search">
        </form>
        <div class="buttons flex flex-dir-row">
            <?php
            if (!isset($_SESSION["user"])) { ?>
                <button id="sign-up" onclick="document.location='sign_up.php'">Sign up</button>
                <button id="log-in" onclick="document.location='log_in.php'">Log in</button>
            <?php
            } else {
                ?>
                <a href="newPost.php" class="newPost-btn-link">
                    <img src="imgs/plus-circle.svg" id="newPost-button">
                </a>
                <a class="pfp" href="profile.php">
                    <img src="data:image/png;base64,<?= $user["pfp"] ?>">
                </a>
                <div class="dropdown">
                    <div class="drop-btn">
                        <img src="imgs/three-lines-icon.svg" height="100%">
                    </div>
                    <div class="drop-content">
                        <a href="index.php">Home</a>
                        <a href="newPost.php">Create new post</a>
                        <a href="profile.php">My Profile</a>
                        <a href="log_out.php">Log Out</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <main>

    </main>
    <footer class="flex flex-dir-row" >
        <a href="https://github.com/CookieKGcz/tumblregram" class="footer-github">
            <img src="imgs/Github-logo.svg" height="100%">
        </a>
    </footer>
</body>
</html>
<script src="scripts/search-bar-outline.js"></script>