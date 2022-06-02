<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1);

include('include_once_arquivo.php');
require('include_once_arquivo.php');

echo "Varriável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Varriável = '{$variavel}'.<br>";

include('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";

require_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";