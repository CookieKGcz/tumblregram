<!DOCTYPE html>
<div id="bubble-wrapper"></div> 
<html lang="en">
<head>
    <script src="scripts/bubble-animation.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="icon" type="image/x-icon" href="imgs/CCCCC.ico">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/forms.css">
    <link rel="stylesheet" href="styles/bubble-animation.css">
</head>
<body>
    <div class="form-background">
        <form action="userlog.php" method="post" class="form-input">
            <input type="text" name="username" id="username" placeholder="Enter a username">
            <input type="password" name="password" id="password" placeholder="Enter a password">

            <button type="submit">Log in</button>
            <p class="redirect">Don't have an account yet? <a href="sign_up.php">Sign up</a></p>
            <p class="error-msg"></p>
        </form>
    </div>
</body>
</html>
<script src="scripts/errorHandler.js"></script>