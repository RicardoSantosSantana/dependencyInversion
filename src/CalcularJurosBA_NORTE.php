<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosBA_NORTE{
    
    public function getJurosBA_NORTE(float $valor){
        return $valor * 0.45;
    }
}