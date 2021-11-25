<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma String';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo "Nós também" . ' Somos';
echo '<br>', "Também aceito", "Virgulas";

echo'<br>';
echo "'Teste'" . '"Teste"' . '\'Teste\''. "\"Teste\"" . "\\";

print("<br>Também existe a função print");
print"<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('Só a primeira letra');
echo '<br>' . ucwords('Todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "uft-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('Isso', ' quiloa', 'trocar isso isso');