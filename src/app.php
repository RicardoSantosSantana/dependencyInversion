<?php

use Ricardo\DependencyInvertion\{CalcularJurosBA, CalcularJurosBA_NORTE, CalcularJurosBA_SUL, CalcularJurosMG, CalcularJurosMG_NORDESTE};
use Ricardo\DependencyInvertion\{CalcularJurosSC, CalcularJurosSP, Cobranca};

require_once __DIR__."/../vendor/autoload.php";

$sp = new CalcularJurosSP;
$sc = new CalcularJurosSC;
$ba = new CalcularJurosBA;
$baNorte = new CalcularJurosBA_NORTE;
$baSul = new CalcularJurosBA_SUL;
$mg = new CalcularJurosMG;
$mgNordeste = new CalcularJurosMG_NORDESTE;

$valor = $argv[1];

$calculaJuros = new Cobranca();
echo "SP          - ".$calculaJuros->valorCobrado($valor, $sp).PHP_EOL;
echo "SC          - ".$calculaJuros->valorCobrado($valor, $sc).PHP_EOL;
echo "BA          - ".$calculaJuros->valorCobrado($valor, $ba).PHP_EOL;
echo "BA Sul      - ".$calculaJuros->valorCobrado($valor, $baSul).PHP_EOL;
echo "BA Norte    - ".$calculaJuros->valorCobrado($valor, $baNorte).PHP_EOL;
echo "MG          - ".$calculaJuros->valorCobrado($valor, $mg).PHP_EOL;
echo "MG Nordeste - ".$calculaJuros->valorCobrado($valor, $mgNordeste).PHP_EOL;
