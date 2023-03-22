<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="icon" type="image/x-icon" href="imgs/CCCCC.ico">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="forms.css">
</head>
<body>
    <div class="form-background">
        <form action="useradd.php" method="post" class="form-input">
            <input type="text" name="username" id="username" placeholder="Enter a username">
            <input type="password" name="password" id="password" placeholder="Enter a password">
            <input type="password" name="repeatPassword" id="repeatPassword" placeholder="Repeat the password">

            <button type="submit">Sign up</button>
            <p class="redirect">Already have an account? <a href="log_in.php">Log in</a></p>
        </form>
    </div>
</body>
</html>