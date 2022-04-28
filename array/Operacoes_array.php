<div class="titulo">Operações com Array</div>

<?php
$dados1 =[
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";
print_r($dadosComplestos);

$dadosComplestos = $dados1 + $dados2;
print_r($dadosComplestos);

echo '<br>' . is_array($dadosComplestos);
echo '<br>' . count($dadosComplestos);

echo'<br>';
$indice = array_rand($dadosComplestos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo "${dadosCampletos['idade']}";

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosComplestos);

unset($dadosComplestos);
echo'<br>';
var_dump($dadosComplestos);

$inpares = [1, 2, 4, 5,, 7, 9];
$pares = [0, 2, 4, 6];

$decimais =  $paras + $impares;
echo'<br>';
print_r($decimais);