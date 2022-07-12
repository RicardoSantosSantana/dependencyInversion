<?php 
namespace Ricardo\DependencyInvertion;

class CalcularJurosMG_NORDESTE implements CobrancaInterface
{
    
    public function getJuros(float $valor){
        return $valor * 0.30;
    }
}