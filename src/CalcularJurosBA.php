<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosBA{
    
    public function getJurosBA(float $valor){
        return $valor * 0.50;
    }
}