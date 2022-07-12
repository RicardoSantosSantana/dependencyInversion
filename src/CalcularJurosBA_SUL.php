<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosBA_SUL implements CobrancaInterface
{
    
    public function getJuros(float $valor){
        return $valor * 0.45;
    }
}