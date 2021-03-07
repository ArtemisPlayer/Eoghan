<?php
//entry point
?>

<html>
    <head>
        <title>ArtemisPlayer</title>
        <link href="css/global.css" rel="stylesheet">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    </head>

    <body>
    <div class="header">
        <div class="logo">
            <a href="/">ArtemisPlayer's Website</a>
        </div>

        <div class="about">
            <button type="button" class="aboutButton" onclick="location.href='/index.php?page=about'">About Me</button>
            <a class="github" href=""><img src="media/github.png"></a>
        </div>
    </div>

    <?php
    if (!isset($_GET["page"]) or $_GET["page"] == "home"){
        require 'pages/home.php';
    } else if ($_GET["page"] == "about"){
        require 'pages/about.php';
    } else {
        die("Des amateurs c'est ce que nous sommes tous, on ne vit jamais assez longtemps pour être autre chose, surtout vous.");
    }
    ?>
    </body>

</html>