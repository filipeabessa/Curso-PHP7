<?php
$nomes = array("Filipe", "Igor", "Lari", "Gab0");

// is_array
if (is_array($nomes)) {
    echo "É um array";
} else {
    echo "Não é um array";
}

echo "<hr>";

// in_array
if (in_array("Filipe", $nomes)) {
    echo "\"Filipe\" existe no array nomes";
} else {
    echo "\"Filipe\" não existe no array nomes";
}

echo "<hr>";

// array_keys
$nomes = array("Primo"=>"Rafa", "Vizinho"=>"Diego", "Tia"=>"Andrea");
$keys = array_keys($nomes);
print_r($keys);
echo "<br>";
$values = array_values($nomes);
print_r($values);

echo "<hr>";

// array_merge
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);

echo "<hr>";

// array_pop
$objetos = array("Caixa de som", "Bola", "Notebook");
print_r($objetos);
echo "<br>";
print_r(array_pop($objetos));
echo "<br>";
print_r($objetos);

echo "<hr>";

// array_shift
$objetos = array("Caixa de som", "Bola", "Notebook");
print_r($objetos);
echo "<br>";
print_r(array_shift($objetos));
echo "<br>";
print_r($objetos);

echo "<hr>";

// array_unshift
$frutas = array("Laranja", "Banana", "Maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Tomate");
echo "<br>";
print_r($frutas);

echo "<hr>";

// array_push
$frutas = array("Laranja", "Banana", "Maçã");
print_r($frutas);
echo "<br>";
array_push($frutas, "Tomate");
echo "<br>";
print_r($frutas);

echo "<hr>";

// array_combine
$nomes = array("Filipe", "Ana", "Claudio");
$nomes_keys = array("Filho", "Mãe", "Pai");
print_r($nomes);
echo "<br>";
print_r($nomes_keys);
echo "<br>";
print_r(array_combine($nomes_keys, $nomes));

echo "<hr>";

// array_sum
$soma = array(5, 6, 10, 8);
foreach($soma as $key_elemento => $valor_elemento) {
    if ($key_elemento < (count($soma) - 1)) {
        echo "$valor_elemento, ";
    } else {
        echo "$valor_elemento.";
    }
}
echo "<br>";
echo array_sum($soma);

echo "<hr>";

// explode
$data = "30/02/2018";
$novaData = explode('/', $data);
print_r($novaData);

echo "<hr>";

// implode
$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
$string = implode(", ", $nomes);
print_r($string);


?>