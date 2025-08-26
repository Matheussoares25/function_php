
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Resultado</h3>

<?php
if ($_POST) {
    $n1 = $_POST["Num1"];
    $n2 = $_POST["Num2"];
    $op = $_POST["calc"];

    function somar($n1, $n2) {
        return $n1 + $n2;
    }

    function subtrair($n1, $n2) {
        return $n1 - $n2;
    }

    function multiplicar($n1, $n2) {
        return $n1 * $n2;
    }

    function divisao($n1, $n2) {
        if ($n2 == 0) {
            return "Erro: Divisão por zero!";
        }
        return $n1 / $n2;
    }

    function calcular($n1, $n2, $op) {
        switch ($op) {
            case "Adição":
                return somar($n1, $n2);
            case "Subtração":
                return subtrair($n1, $n2);
            case "Multiplicação":
                return multiplicar($n1, $n2);
            case "Divisão":
                return divisao($n1, $n2);
            default:
                return "Operação inválida.";
        }
    }

    $resultado = calcular($n1, $n2, $op);
    echo "<p>O resultado é: <strong>$resultado</strong></p>";
}
?>
</body>
</html>
