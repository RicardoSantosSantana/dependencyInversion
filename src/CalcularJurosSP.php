<?php 

namespace Ricardo\DependencyInvertion;

use Ricardo\DependencyInvertion\CobrancaInterface;

class CalcularJurosSP implements CobrancaInterface
{
    public function getJuros(float $valor)
    {
        return $valor * 0.20;
    }
}