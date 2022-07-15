<?php
// Constantes
define("NOME", "Filipe Bessa");
define("IDADE", "24");
define("ALTURA", "1.76");
define("CASADO", false);
define("TIMES", ["São Paulo", "Corinthians", "Palmeiras"]);

function exibirTimes() {
    global $TIMES;
    echo TIMES[0];
    echo "<br>";
    echo TIMES[1];
    echo "<br>";
    echo TIMES[2];
}

echo 'Meu nome é '.NOME.', tenho '.IDADE.' anos de idade e tenho '.ALTURA.' de altura.';
echo "<hr>";
exibirTimes();

?>