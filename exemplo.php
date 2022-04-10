<?php

require_once "vendor/autoload.php";

use guiaristeu\buscarCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('06803440');

print_r($resultado);