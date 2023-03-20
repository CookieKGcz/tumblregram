<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="icon" type="image/x-icon" href="imgs/CCCCC.ico">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="forms.css">
</head>
<body class="bg flex justify-content align-items">
    <form action="useradd.php" method="post" class="bg flex flex-col w-50 p-5 border-white">
        <input type="text" name="username" id="username" class="border-white margin-bot-3">
        <input type="password" name="password" id="password" class="border-white margin-bot-3">

        <button type="submit" class="border-green green">Log in</button>
    </form>
</body>

</html>