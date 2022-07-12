<?php

use Ricardo\DependencyInvertion\Cobranca;

require_once __DIR__."/src/app.php";

$valor = $argv[1];

$cobranca = new Cobranca;
echo $cobranca->valorCobrado($valor,"SP").PHP_EOL;
