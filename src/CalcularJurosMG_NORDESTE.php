<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosMG_NORDESTE{
    
    public function getJurosMinas_NORDESTE(float $valor){
        return $valor * 0.30;
    }
}