<?php
$nome = "Filipe Bessa";
$a = 1;
$b = 2;
$c = 3;

function exibeNome() {
    // ESCOPO GLOBAL
    global $nome;
    echo $nome;
}


function defineCidade() {
    // ESCOPO LOCAL
    global $cidade;
    $cidade = "Recife";
}

function soma() {
    echo $GLOBALS['c'] + $GLOBALS['a'] + $GLOBALS['b'];
}

exibeNome();
echo "<hr>";
defineCidade();
echo $cidade;
echo "<hr>";
soma();





?>