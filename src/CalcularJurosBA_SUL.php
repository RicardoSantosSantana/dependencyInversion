<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosBA_SUL{
    
    public function getJurosBA_SUL(float $valor){
        return $valor * 0.45;
    }
}