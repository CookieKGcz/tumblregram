<!DOCTYPE html>
<style>
    body {
        background-color: #e5e5e5;
        margin: 0;
    }

    .top-bar {
        width: 100%;
        height: 8rem;
        background-color: #011936;
        justify-content: right;
        align-items: center;
    }

    .buttons {
        justify-content: right;
    }

    #sign-up {
        background-color: aquamarine;
        color: black;
    }

    #log-in {
        background-color: transparent;
        border: 4px solid aquamarine;
        color: aquamarine;
    }

    .buttons>* {
        margin-right: 2rem;
        height: 3rem;
        width: 10rem;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: bolder;
    }

    .flex {
        display: flex;
    }

    .flex-dir-row {
        flex-direction: row;
    }
</style>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookieKGram</title>
    <link rel="icon" type="image/x-icon" href="imgs/CCCCC.ico">
</head>

<body>
    <div class="top-bar flex flex-dir-row">
        <!--<img src="imgs/výkresCCC.svg">-->
        <img src="imgs/CX.png">
        <div class="buttons flex flex-dir-row"> <button id="sign-up">Sign up</button> <button id="log-in">Log in</button> </div>
    </div>
</body>

</html>