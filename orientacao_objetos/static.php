<div class="titulo">Membros Estáticos (Static)</div>

<?php
class A{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de Classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        //Tentativa 1
        //echo "Estática = {$this->static}<br>";
        //Tentativa 2
        //echo "Estática = {self::$static}<br>";
        echo "Estática =" . self::$static ."<br>";
    }

    public static function mostrarStaticA(){
        //echo "Não stática = {$this->naoStatic}<br>";
        //echo "Estática = {$static}<br>";
        echo "Estática =" . self::$static ."<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // Não é a forma ideal

echo '<br>';
echo A::$static, '<br>'; // acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = "Alterado membro de classe";
echo A::$static, '<br>'; // acessar diretamente pela classe