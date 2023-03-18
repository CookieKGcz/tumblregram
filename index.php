<!DOCTYPE html>
<style>
    body {
        background-color: #e5e5e5;
        margin: 0;
        display: grid;
        grid: 8rem 5rem auto / auto 60rem auto;
    }

    .top-bar {
        width: 100%;
        height: 8rem;
        background-color: #011936;
        align-items: center;
        grid-area: 1/1 /span 1 / span 3;
    }

    main {
        border: 5px ridge #011936;
        min-height: 60rem;
        grid-area: 3/2;
        background-color: aliceblue;
    }

    .hund-perc-height {
        height: 100%;
    }

    #widthSameAsHeight {
        aspect-ratio: 1/1;
    }

    .padding-1 {
        padding: 1rem;
    }

    .border{
        border-bottom: 2px ridge bisque;
    }

    .justi-cont-right {
        justify-content: right;
    }

    .justi-cont-center {
        justify-content: center;
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

    /*.max-content {
        height: max-content;
    }*/

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
    <div class="top-bar flex flex-dir-row border">

        <div class="padding-1 hund-perc-height" id="widthSameAsHeight">
            <img src="imgs/výkresCCCC.svg" height="100%">
        </div>
        <!--<img src="imgs/CX.png" class="hund-perc">-->
        <div class="top-bar buttons flex flex-dir-row justi-cont-right">
            <button id="sign-up">Sign up</button>
            <button id="log-in">Log in</button>
        </div>
    </div>

    <main>

    </main>
</body>

</html>