<div class="titulo">Desafio Switch #01</div>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha - km</option>
        <option value="metro-km">Metros - km</option>
        <option value="km-metro">km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH =1.8;

$param = $_POST['param'] ?? '0';
switch ($_POST['conversao']){
    case'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param km(S) = $distancia Milha(S)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(S) = $distancia km(S)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagm = "$oaram Metro(s) = $distancia km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param km(S) = $distancia Metro(S)";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}° Celsius = {$conversao}° Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}° Fahrenheit = {$conversao}° Celsius";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";
