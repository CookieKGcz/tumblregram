<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookieKGram</title>
    <link rel="icon" type="image/x-icon" href="imgs/logo.ico">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="top-bar flex flex-dir-row just-cont-right">
        <img style="margin-left: 1rem;" src="imgs/logo.svg" height="80%">
        <h1 class="name">CookieGram</h1>
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