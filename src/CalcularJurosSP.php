<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosSP{
    
    public function getJuros(float $valor){
        return $valor * 0.20;
    }
}