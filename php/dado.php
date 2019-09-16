<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/styleForm">
    </head>
    <body>
        <form action=" " method = "POST">
            <input class="bt" type = "submit" name = "d" value = "D4">
            <input class="bt" type = "submit" name = "d" value = "D6">
            <input class="bt" type = "submit" name = "d" value = "D8">
            <input class="bt" type = "submit" name = "d" value = "D10"> <br>
            <input class="bt" type = "submit" name = "d" value = "D12">
            <input class="bt" type = "submit" name = "d" value = "D20">
        </form>
        <hr>
        <?php
            $dado = isset($_POST['d']) ? $_POST['d'] : null;
            
            switch ($dado){
                case "D4" :
                    echo'<div id="numero">'.mt_rand(1,4).'</div>';
                    break;
                case "D6" :
                    echo'<div id="numero">'.mt_rand(1,6).'</div>';
                    break;
                case "D8":
                    echo'<div id="numero">'.mt_rand(1,8).'</div>';
                    break;
                case "D10" :
                    echo'<div id="numero">'.mt_rand(1,10).'</div>';
                    break;
                case "D12" :
                    echo'<div id="numero">'.mt_rand(1,12).'</div>';
                    break;
                case "D20":
                    echo'<div id="numero">'.mt_rand(1,20).'</div>';
                    break;
                default:
                    echo "<h3>Escolha um Dado</h3>";
                    break;
            }   
        ?>
        


    </body>

</html>