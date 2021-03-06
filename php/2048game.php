<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="..\\img\\iconSite.png">
    <link rel="stylesheet" href="../css/2048game.css">
    <link rel="stylesheet" href="../css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="..\\css\\responsive.css">
    <title>GamesUnited - 2048</title>
</head>
<body>
    <script src="../JS/2048game.js"></script>
    
    <!--The HTML, CSS, and JS is not offical. Source: http://2048game.com/ -->
    <header style="margin-bottom: 12px;"> 
        <a id="a0" href="introduction.php"><span>Menu</span></a>
        <a id="a1" href="menuNoticias.php"><span>Notícias</span></a>
        <a id="a2" href="streams-riot.php"><span>Streams</span></a>
        <a id="a3" href="menuGames.php"><span>Games</span></a>
        <a id="a4" href="formularios.php"><span>Fomulários</span></a>
    </header>
    <div class="main-class">
        <div class="block-2048">
            <div class="heading">
                <h1 class="title"><a>2048</a></h1>
                <div class="scores-container">
                    <div class="score-container">0</div>
                    <div class="best-container">0</div>
                </div>
            </div>
            <div class="game-intro">
                <a class="restart-button">Novo Jogo</a>
                <h2 class="subtitle">Jogue <strong>2048</strong> Online</h2>
                <div class="above-game">
                <p>Junte os números para conseguir o <strong>número 2048!</strong></p>
            </div>
        </div>

        <div class="game-container">
        <div class="game-message">
            <p></p>
            <div class="lower">
                <a class="keep-playing-button">Continue Jogando</a>
                <a class="retry-button">Tente Novamente</a>
                <div class="score-sharing"></div>
            </div>
        </div>

        <div class="grid-container">
            <div class="grid-row">
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            </div>
        </div>

        <div class="tile-container"><div class="tile tile-4 tile-position-3-4 tile-new"><div class="tile-inner">4</div></div><div class="tile tile-2 tile-position-4-1 tile-new"><div class="tile-inner">2</div></div></div>
        </div>
        </div>
    </div>
              
</body>
</html>