<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";

$texto = "A sua note é: $numero";
echo  "<br>$texto";

$objeto = 'Caneta';
echo "<br> Eu tenho 5  $objetos";
echo "<br> Eu tenho 5 {$objeto}s.";
echo "<br> Eu tenho 5 {$objeto}s mas perdi 3 {$objeto}s.";