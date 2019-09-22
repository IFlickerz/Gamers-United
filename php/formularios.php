<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>GamersUnited</title>
        <link rel="icon" href="..\\img\\iconSite.png">
        <link rel="stylesheet" type="text/css" href="../css/styleForm.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    </head>
    <body>
        <header style="margin-bottom: 12px;"> 
            <a id="a0" href="../html/introduction.html"><span>Menu</span></a>
            <a id="a1" href="../html/menuNoticias.html"><span>Notícias</span></a>
            <a id="a2" href="../html/streams-riot.html"><span>Streams</span></a>
            <a id="a3" href="../html/menuGames.html"><span>Games</span></a>
            <a id="a4" href="../php/formularios.php"><span>Fomulários</span></a>
        </header>
        <div class = "centralizar">
            <aside>
                <ul>
                    <li><a href="formularios.php?n=1">Calculadora</a></li>
                    <li><a href="formularios.php?n=2">Dado</a></li>
                </ul>

            </aside>
            <div id = "conteudo">
              <?php
                $N  = isset($_GET['n']) ? $_GET['n'] : null;
                switch($N){
                    case 1:
                        include('calculadora.php');
                        break;
                    case 2 :
                        include('dado.php');
                        break;
                }
              ?>
            </div>
        </div>
        

    </body>
</html>