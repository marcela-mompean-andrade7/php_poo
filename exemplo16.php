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
}

$teste = new Visibilidade(1, 2, 3);
echo "Atributo public = $teste->varPulic ";
echo "Atributo protected = $teste->varProtected ";
echo "Atributo private = $teste->varPrivate ";