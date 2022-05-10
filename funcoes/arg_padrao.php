<div class="titulo">Argumento Padrão</div>

<?
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem Vindo, $nome $sobrenome <br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, NULL);
echo saudacao('Mestre, Supremo');

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>"; 
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

//anotarPedido2('Hamburguer);
anotarPedido2('Refrigerante2', 'Pizza2');