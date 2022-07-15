<?php
// Arrays
$carros = array(2=>"Fusca", 1=>"Gol", 0=>"Palio", 3=>"Uno");
$carros[] = "Celta";
print_r($carros);

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);
echo "<br>";

$clientes = ["Rodrigo", "João", "Maria"];
print_r($clientes);
echo "<hr>";

// Count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach
foreach ($carros as $carro) {
    echo $carro."<br>";
}
echo "<hr>";

// Array associativo
$pessoa = array("nome"=>"Filipe", "idade"=>24, "altura"=>1.76);
$pessoa["cidade"]="Recife";

foreach($pessoa as $chave => $valor) {
    echo $chave.": ".$valor."<br>";
}

echo "<hr>";

// Array multidimensionais
$times = array(
    "corinthians"=>array(
        "Nome"=>"Corinthians",
        "Fundação"=>"1822",
        "Técnico"=>"José Mourinho"
    ),
    "santos"=>array(
        "Nome"=>"Santos",
        "Fundação"=>"1878",
        "Técnico"=>"José Mourinho"
    ),
    "sao paulo"=>array(
        "Nome"=>"São Paulo",
        "Fundação"=>"1899",
        "Técnico"=>"José Mourinho"
    )
);

foreach($times as $time) {
    foreach($time as $chave => $valor) {
        echo $chave.": ".$valor."<br>";
    }
    echo "<br>";
}
?>