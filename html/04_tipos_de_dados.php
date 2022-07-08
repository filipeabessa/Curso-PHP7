<?php
// Escalares: int, float, string, boolean, null
$nome = "Olá mundo"; // string
$idade = 24; // int
$altura = 1.76; // float
$isWorking = true; // boolean

echo $nome;
echo "<br>";
echo var_dump($nome);
echo "<br>";
if (is_string($nome)) {
    echo "É uma string";
} else {
    echo "Não é uma string";
}

echo "<hr>";

echo $idade;
echo "<br>";
var_dump($idade);
echo "<br>";
if (is_int($idade)) {
    echo "É um inteiro";
} else {
    echo "Não é um inteiro";
}

echo "<hr>";

echo $altura;
echo "<br>";
var_dump($altura);
echo "<br>";
if (is_float($altura)) {
    echo "É um float";
} else {
    echo "Não é um float";
}

echo "<hr>";

echo $isWorking;
echo "<br>";
var_dump($isWorking);
echo "<br>";
if (is_bool($isWorking)) {
    echo "É um boolean";
} else {
    echo "Não é um boolean";
}

echo "<hr>";

// array
$amigos = array("Lara", "Rafa", "Vinicius", "Tulio", "Mari");
for ($i = 0; $i < count($amigos); $i++) {
    echo $amigos[$i];
    if ($i < count($amigos) - 1) {
        echo ", ";
    }
}
echo "<br>";
var_dump($amigos);
echo "<br>";
if (is_array($amigos)) {
    echo "É um array";
} else {
    echo "Não é um array";
}

echo "<hr>";

// object
class Cliente {
    public $nome;
    public $idade;
    public $altura;
    public $peso;
    public $sexo;
    public $corOlhos;

    public function atribuirNome($nome) {
        $this->nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Filipe Bessa");
echo $cliente->nome;
echo "<br>";
var_dump($cliente);
echo "<br>";
if (is_object($cliente)) {
    echo "É um objeto";
} else {
    echo "Não é um objeto";
}
?>
