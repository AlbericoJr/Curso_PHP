<div class="titulo">Foreach</div>

<?php
$array = [
  1 => 'Domingo',
  'Segunda',
  'Terça',
  'Quarta',
  'Quinta',
  'Sexta',
  'Sábado'  
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', '0', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
    //echo "$linha <br>";
    foreach ($linha as $letra) {
        echo "$letra";
    }
    echo "<br>";
}

$numero = [1, 2 , 3, 4, 5];
foreach($numero as &$dobrar) { // & Pode ser utilizado para drobrar o valor em PHP
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numero);