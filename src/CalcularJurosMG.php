<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosMG{
    
    public function getJurosMinas(float $valor){
        return $valor * 0.30;
    }
}