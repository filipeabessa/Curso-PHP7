<?php
// if else
$nota = 10;

if ($nota == 10):
    echo "É igual a 10.";
else:
    echo "É diferente de 10.";
endif;

echo "<hr>";

// operador ternário
$media = 7;

echo $nota >= $media ? "Aprovado!" : "Reprovado!"; 

echo "<hr>";

// switch case
$cor = "vermelho";

switch ($cor):
    case "vermelho":
        echo "Sua cor preferida é o vermelho";
        break;
    case "verde":
        echo "Sua cor preferida é o verde";
        break;
    
    default:
        echo "Nenhuma cor selecionada";
endswitch;
?>