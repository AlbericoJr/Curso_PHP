<div class="titulo">Desafio String</div>

<?php


//Enunciado:
//Avaliando os métodos da documentação da String, quais o métodos que a posição do texto 'abc' na string '!AbcaBcabC' retorne 1?


echo strpos('!AbcaBcabC', 'abc') . '<br>';
echo stripos('!AbcaBcabC', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabC'), strtolower('abc'));