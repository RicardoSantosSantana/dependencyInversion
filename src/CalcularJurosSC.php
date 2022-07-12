<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosSC{
    
    public function getJurosSC(float $valor){
        return $valor * 0.15;
    }
}