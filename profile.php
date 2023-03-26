<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TumblreGram</title>
    <link rel="stylesheet" href="styles/profile.css">
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
                    <a href="profile.php">My Profile</a>
                    <a href="log_out.php">Log Out</a>
                </div>
            </div>
        </div>
    </div>
    <main>
        
    </main>
</body>
</html>
<script src="scripts/search-bar-outline.js"></script>