<div class="titulo">Modificadores de Acesso</div>

<?php
class A{
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Class A) Publico =  {$this->publico} <br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado} <br>";
    }

    protected function vainaoMostrar(){
        echo 'Serei transmitido por herança!<br>';
    }

    private function naoMostrar(){
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

class B extends A {
    public function mostrarB()
    {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        echo "Class B) privado = {$this->privado}<br>";

        parent::vainaoMostrar();                                                                            

    }
}

echo '<br>';
$a = new B();
$a->mostrarB();
$a->mostrarA();