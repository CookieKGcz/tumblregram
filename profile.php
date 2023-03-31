<?php
session_start();
require_once 'config.php';

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

$creationDate = $db->query("SELECT `creation-date` FROM `users` WHERE `username` = '" . $_SESSION['user'] . "';")->fetch()["creation-date"];
$newDate = date("d.m. Y", strtotime($creationDate));

$user = $db->query("SELECT * FROM `users` WHERE `username` = '" . $_SESSION['user'] . "';")->fetch();
if (isset($_FILES["image"]["tmp_name"])) {
    if(empty($_FILES["image"]["error"])) {
        $pfp = file_get_contents($_FILES["image"]["tmp_name"]);
        
        $stmt = $db->prepare("UPDATE `users`
                                SET `pfp` = ?
                                WHERE `username` = '" . $_SESSION['user'] . "';");
        $stmt->execute([base64_encode($pfp)]);
    } elseif ($_FILES["image"]["error"] == 1) {
        echo "Image too bigga!";
    } elseif ($_FILES["image"]["error"] == 4) {
        echo "No file was uploaded";
    } else {
        echo "Kamo vubec nevim... :(";
        echo $_FILES["image"]["error"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TumblreGram</title>
    <link rel="icon" type="image/x-icon" href="imgs/logo.ico">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/dropdown.css">
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
        <div class="profile-wrapper">
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
        </div>
    </div>
    <main>
        <div class="profile-description flex flex-dir-row">
            <div class="profile-image flex flex-dir-col">
                <img class="profile-description-picture" src="data:image/png;base64,<?= $user["pfp"] ?>">
                <form method="post" enctype="multipart/form-data">
                    <label tabindex="0" for="image" id="image-btn">Choose image</label>
                    <input type="file" name="image" id="image" accept="image/*">
                    <button id="submit-btn" type="submit">Apply changes</button>
                </form>
            </div>
            <div class="profile-info flex flex-dir-col">
                <span class="username">
                    <?= $_SESSION["user"] ?>
                </span>
                <span class="creation-date">
                    Member since - <?= $newDate ?>
                </span>
                <span class="creation-date">
                    Number of posts - <?= $user["posts"] ?>
                </span>
            </div>
        </div>
    </main>
    <footer class="flex flex-dir-row" >
        <a href="https://github.com/CookieKGcz/tumblregram" class="footer-github">
            <img src="imgs/Github-logo.svg" height="100%">
        </a>
    </footer>
</body>
</html>
<script src="scripts/search-bar-outline.js"></script>