<?php

class Visibilidade{
    public $varPulic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPulic, $varProtected, $varPrivate)
    {
        $this->varPulic = $varPulic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }
    public function publicFunc()
    {
        echo "Método Público <br>";
    }
    protected function protectedFunc()
    {
        echo "Método Protegido <br>";
    }
    private function privateFunc()
    {
        echo "Método Privado <br>";
    }
}

$teste = new Visibilidade(1, 2, 3);
// echo "Atributo public = $teste->varPulic ";
// echo "Atributo protected = $teste->varProtected ";
// echo "Atributo private = $teste->varPrivate ";

echo "<br>";
$teste->publicFunc();
$teste->protectedFunc();
$teste->privateFunc();