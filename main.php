<?php

define('PATH_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('PATH_INTERFACES', PATH_ROOT . 'interfaces' . DIRECTORY_SEPARATOR);


require_once PATH_INTERFACES . 'ResourceCollectorInterface.php';
require_once PATH_INTERFACES . 'FarmAnimalResourceInterface.php';

require_once PATH_ROOT . 'ResourceCollector.php';
require_once PATH_ROOT . 'FarmAnimalResource.php';

/*$resourceCollector = new ResourceCollector();

$report = json_decode($resourceCollector->getTotals());

var_dump($report);

//print $resourceCollector->getTotals();
*/

$milk = new FarmAnimalResource('молоко','л');
$resourceCollector = new ResourceCollector();

$resourceCollector->add($milk,1);