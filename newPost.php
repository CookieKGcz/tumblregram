<?php
session_start();
require_once 'config.php';

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TumblreGram</title>
    <link rel="icon" type="image/x-icon" href="imgs/logo.ico">
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
            <input type="text" name="title" id="title" placeholder="Title">
            <textarea name="post-content" id="post-content" placeholder="Text (optional)"></textarea>
            <label for="image" id="image-btn">Choose image</label>
            <input type="file" name="image" id="image" accept="image/*">
            <button type="submit" id="submit-btn">Post</button>
        </form>
    </main>
</body>
</html>
<script src="scripts/search-bar-outline.js"></script>