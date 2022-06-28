<div class="titulo">Desafio intdiv</div>

<!--
    O método intdiv para...
- Lançar uma exceção quando tentar dividir por zero
- Lançar uma exceção quando o resultado não for inteiro
- Dividir normalmente nos demais casos

Os testes
- intdiv com os parametros 8 e 2 [Sucesso]
- intdiv com os parametros 8 e 3 [Exceção]
- intdiv com os parametros 8 e 0 [Exceção]
- intdiv "original" com os paramettros 8 e 3 [Sucesso]
-!>

<?php
namespace Aritmetica;

class NaoInteiroException extends \Exception {

}

function intdiv($a, $b) {
    if($b === 0) {
        throw new \DivisionByZeroError();
    }
    if($a % $b > 0){
        throw new NaoInteiroException();
    }
    return $a / $b;
}