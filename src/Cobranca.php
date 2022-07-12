<?php 

namespace Ricardo\DependencyInvertion;

class Cobranca
{   
    public function valorCobrado($preco, CobrancaInterface $juros)
    {
        return $preco + $juros->getJuros($preco);
    }
}