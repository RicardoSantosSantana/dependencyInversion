<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosBA implements CobrancaInterface
{
    
    public function getJuros(float $valor){
        return $valor * 0.50;
    }
}