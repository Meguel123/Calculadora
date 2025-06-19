

<?php 
    $nu1 = $_GET['numero'];
    $nu2 = $_GET['numero2'];
    $contador = 1;

    echo "Seu número é: " . $nu1 . "<br>";
    echo "Você quer ver a tabuada dele até: " . $nu2 . "<br><br>";

    while ($contador <= $nu2) {
        echo $nu1 . " x " . $contador . " = " . ($nu1 * $contador) . "<br>";
        $contador++;
    }
?>