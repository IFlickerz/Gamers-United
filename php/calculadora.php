<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href ="../css/styleForm.css">
</head>

<body>
    <div id = "form">
        <form action=" " method = "POST"> 
            <p>Digite um valor: <input type = "number" name = "num1"></p>
            <p>Digite outro valor: <input type = "number" name = "num2"></p>
            <p>Digite uma operção: <input type = "text" name = "entrada"></p>
            <input class="submit" type = "submit" name = "enviar">
        </form>
    </div>
    <hr>
    <div id = "display">
        <?php
            if(isset($_POST['enviar'])){
                $num1 = is_numeric($_POST['num1']) ? $_POST['num1'] : 0 ;
                $num2 = is_numeric($_POST['num2']) ? $_POST['num2'] : 0 ;
                $operacao = $_POST['entrada'];
                
                switch ($operacao){
                    case 'Soma':
                        echo "<h3> A soma é de : ".($num1+$num2)."</h3>";
                        break;
                    case 'Subtração':
                        echo "<h3> A subtração é de : ".($num1-$num2)."</h3>";
                        break;
                    case 'Multiplicação':
                        echo "<h3> A Multiplicação é de : ".($num1*$num2)."</h3>";
                        break;
                    case 'Divisão':
                        echo "<h3> A Divisão é de : ".($num1/$num2)."</h3>";
                        break;
                    default :
                    echo "<h3>Preencha os campos</h3>";

                }
            }
        ?>
    </div>
    

</body>
</html>