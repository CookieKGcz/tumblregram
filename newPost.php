<?php
session_start();
require_once 'config.php';

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

if (isset($_POST["title"])) {
    if (empty($_FILES["image"]["error"])) {
        $title = $_POST['title'];
        $postContent = $_POST['post-content'];

        $creationDate = $db->query("SELECT `creation-date` FROM `users` WHERE `username` = '" . $_SESSION['user'] . "';")->fetch()["creation-date"];
        $newDate = date("d.m. Y H:i", strtotime($creationDate));

        $authorId = $db->query("SELECT id FROM users WHERE username = '" . $_SESSION["user"] . "'")->fetch()["id"];

        $image = file_get_contents($_FILES["image"]["tmp_name"]);

        $stmt = $db->prepare("INSERT INTO `posts` (`authorId`, `title`, `content`, `image`) VALUES (?, ?, ?, ?);");
        $stmt->execute([$authorId, $title, $postContent, base64_encode($image)]);
        
        header("Location: index.php");
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
    <link rel="stylesheet" href="styles/newPost.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/dropdown.css">
</head>
<body>
    <div class="top-bar flex flex-dir-row">
        <img id="logo" src="imgs/logo.svg" height="80%">
        <form id="search-bar">
            <input id="mag-glass" type="image" src="imgs/Magnifying_glass_icon.svg" alt="Search" height="28px">
            <input id="search-box" type="text" onfocus="setOutline()" onfocusout="removeOutline()" placeholder="Search">
        </form>
        <div class="profile-wrapper">
            <a href="newPost.php" class="newPost-btn-link">
                <img src="imgs/plus-circle.svg" id="newPost-button">
            </a>
            <a class="pfp" href="profile.php">
                <img src="imgs/gargamel-pfp.jpg">
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
        <form method="post" class="new-post flex flex-dir-col">
            <input type="text" name="title" id="title" placeholder="Title" required>
            <textarea name="post-content" id="post-content" placeholder="Text (optional)"></textarea>
            <label for="image" id="image-btn">Choose image</label>
            <input type="file" name="image" id="image" accept="image/*">
            <button type="submit" id="submit-btn">Post</button>
        </form>
    </main>
    <footer class="flex flex-dir-row" >
        <a href="https://github.com/CookieKGcz/tumblregram" class="footer-github">
            <img src="imgs/Github-logo.svg" height="100%">
        </a>
    </footer>
</body>
</html>
<script src="scripts/search-bar-outline.js"></script>