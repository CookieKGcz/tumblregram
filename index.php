<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TumblreGram</title>
    <link rel="icon" type="image/x-icon" href="imgs/logo.ico">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div class="top-bar flex flex-dir-row">
        <img id="logo" src="imgs/logo.svg" height="80%">
        <form class="search-bar">
            <input id="mag-glass" type="image" src="imgs/Magnifying_glass_icon.svg" alt="Search" height="28px">
            <input class="search-input" type="text" placeholder="Search">
        </form>
        <div class="buttons flex flex-dir-row">
            <?php
            if (!isset($_SESSION["user"])) { ?>
                <button id="sign-up" onclick="document.location='sign_up.php'">Sign up</button>
                <button id="log-in" onclick="document.location='log_in.php'">Log in</button>
            <?php
            } else {
                ?>
                    <button id="log-out" onclick="document.location='log_out.php'">Log out</button>
                <?php
            }
            ?>
        </div>
    </div>
    <main>

    </main>
</body>
</html>