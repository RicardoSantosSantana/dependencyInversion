<?php 
namespace Ricardo\DependencyInvertion;

class Cobranca{
 
    public function valorCobrado($preco,$cidade,$zona=""){
        $retorno=0;

        if($cidade=="SP"){
            
            $juros = new CalcularJurosSP;
            $retorno= $preco + $juros->getJuros($preco);
            
        } else if ($cidade=="MG"){
            
            $juros = new CalcularJurosMG;
            $retorno= $preco + $juros->getJurosMinas($preco);

            if($zona=="NORDESTE"){
                $juros = new CalcularJurosMG_NORDESTE;
                $retorno= $preco + $juros->getJurosMinas_NORDESTE($preco);
            }

        } else if($cidade=="SC"){

            $juros = new CalcularJurosSC;
            $retorno= $preco + $juros->getJurosSC($preco);

        } else if($cidade=="BA"){

            $juros = new CalcularJurosBA;
            $retorno= $preco + $juros->getJurosBA($preco);

            if($zona=="SUL"){

                $juros = new CalcularJurosBA_SUL;
                $retorno= $preco + $juros->getJurosBA_SUL($preco);

            } else if ($zona=="NORTE") {                

                $juros = new CalcularJurosBA_NORTE;
                $retorno= $preco + $juros->getJurosBA_NORTE($preco);            
                
            }

        }
        return $retorno; 
    }
}