<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosBA_NORTE implements CobrancaInterface
{
    
    public function getJuros(float $valor){
        return $valor * 0.45;
    }
}