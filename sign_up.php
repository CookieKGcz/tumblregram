<!DOCTYPE html>
<div id="bubble-wrapper"></div> 
<html lang="en">
<head>
    <script src="scripts/bubble-animation.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="icon" type="image/x-icon" href="imgs/CCCCC.ico">
    <link rel="stylesheet" href="styles/forms.css">
    <link rel="stylesheet" href="styles/bubble-animation.css">
</head>
<body>
    <a href="index.php" id="home-btn-link">
        <img src="imgs/left_arrow_white.png" id="home-button">
    </a>
    <div class="form-wrapper">
        <div class="form-background">
            <form action="useradd.php" method="post" class="form-input">
                <input type="text" name="username" id="username" placeholder="Enter a username">
                <input type="password" name="password" id="password" placeholder="Enter a password">
                <input type="password" name="repeatPassword" id="repeatPassword" placeholder="Repeat the password">
                <button  id="submit-btn "type="submit">Sign up</button>
                <p class="redirect">Already have an account? <a href="log_in.php">Log in</a></p>
                <p class="error-msg"></p>
            </form>
        </div>
    </div>
    
</body>
</html>
<script src="scripts/errorHandler.js"></script>