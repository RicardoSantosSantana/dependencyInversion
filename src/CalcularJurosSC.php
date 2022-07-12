<?php 

namespace Ricardo\DependencyInvertion;

class CalcularJurosSC implements CobrancaInterface
{
    
    public function getJuros(float $valor){
        return $valor * 0.15;
    }
}