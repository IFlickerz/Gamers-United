<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="..\\img\\iconSite.png">
    <link rel="stylesheet" href="../css/streams.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>GamersUnited - Streams</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="..\\css\\responsive.css">
</head>
<body>
    <header style="margin-bottom: 12px;"> 
        <a id="a0" href="introduction.php"><span>Menu</span></a>
        <a id="a1" href="menuNoticias.php"><span>Notícias</span></a>
        <a id="a2" href="streams-riot.php"><span>Streams</span></a>
        <a id="a3" href="menuGames.php"><span>Games</span></a>
        <a id="a4" href="formularios.php"><span>Fomulários</span></a>
    </header>
    <div class="main-frame">
        <div>
            <p class="titulo">Escolha a Stream que deseja: </p>
        </div>
        <div class="buttons">
            <button onclick="window.location.href='streams-riot.html'" class="button" style="vertical-align:middle"><span>RiotGamesBrazil</span></button>
            <button onclick="window.location.href='streams-ookina.html'" class="button" style="vertical-align:middle"><span>Ookina</span></button>
            <button onclick="window.location.href='streams-jovirone.html'" class="button" style="vertical-align:middle"><span>Jovirone</span></button>
            <button onclick="window.location.href='streams-gaules.html'" class="button" style="vertical-align:middle"><span>Gaules</span></button>
            <button onclick="window.location.href='streams-eslcsgo.html'" class="button" style="vertical-align:middle"><span>ESL CSGO</span></button>
        </div>
    </div>
    <div class="twitch-stream">
        <iframe
            src="https://player.twitch.tv/?channel=riotgamesbrazil&muted=false"
            height="640"
            width="100%"
            frameborder="0"
            scrolling="no"
            allowfullscreen="true">
        </iframe>
    </div>
</body>
</html>