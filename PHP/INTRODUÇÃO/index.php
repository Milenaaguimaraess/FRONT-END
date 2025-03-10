<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução PHP</title>
</head>
<body>
    <h1>HELLO WOLRD!</h1>

    <!-- <script language="php"></script> -->
    <?php 
    // COMANDOS NÃO SÃO CASE SENSITIVE
    echo "VICTOR SANTOS <br>";
    EcHo "Bruno";
    ECHO "teste";

    $palavra = "bolo";
    $PALAVRA = "banana";
    echo $palavra;
    echo $PALAVRA;

    // mostra a data
    echo date("d/m/y");
    echo "Todos os direitos reservados @." .date("y");
    echo "<br>";
    echo date_default_timezone_set("America/Sao_Paulo");
    echo date_default_timezone_get();
    echo date("G:i:s:T");
    // mostra todas as informações(db, da máquina e etc):
    //phpinfo();
    ?>
</body>
</html>