<?php

define('PATH_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('PATH_INTERFACES', PATH_ROOT . 'interfaces' . DIRECTORY_SEPARATOR);
define('PATH_ABSTRACTS', PATH_ROOT . 'abstracts' . DIRECTORY_SEPARATOR);

require_once PATH_INTERFACES . 'FarmAnimalInterface.php';
require_once PATH_INTERFACES . 'HasIntegerIdInterface.php';
require_once PATH_ABSTRACTS . 'FarmAnimalAbstract.php';

require_once PATH_INTERFACES . 'ResourceCollectorInterface.php';
require_once PATH_INTERFACES . 'FarmAnimalResourceInterface.php';
require_once PATH_INTERFACES . 'FarmAnimalInventoryInterface.php';
require_once PATH_INTERFACES . 'RandomNumberGeneratorInterface.php';
require_once PATH_INTERFACES . 'GivingResourceInterface.php';

require_once PATH_ROOT . 'ResourceCollector.php';
require_once PATH_ROOT . 'FarmAnimalResource.php';
require_once PATH_ROOT . 'FarmAnimal.php';
require_once PATH_ROOT . 'RandomNumberGenerator.php';

/*$resourceCollector = new ResourceCollector();

$report = json_decode($resourceCollector->getTotals());

var_dump($report);

//print $resourceCollector->getTotals();
*/


/*$milk = new FarmAnimalResource('молоко','л');
$eggs = new FarmAnimalResource('яйцо','шт');
$meat = new FarmAnimalResource('свинина','кг');
$meat2 = new FarmAnimalResource('говядина','кг');
$whool = new FarmAnimalResource('овечья шерсть','кг');

$resourceCollector = new ResourceCollector();

$resourceCollector
   ->add($milk,1)
   ->add($eggs,20)
   ->add($meat,100)
   ->add($meat2,100)
   ->add($whool,1);

$report = json_decode($resourceCollector->getTotals());

var_dump($report);*/

///////////////////////////////////////////////////////////////////////////

// "08 RandomNumberGenerator works!"
/*
$randGen = new RandomNumberGenerator(1,10);

print $randGen->getRandomNumber();
*/

// "09 Able to collect resource from farm animal"

$eggResource = new FarmAnimalResource('яйцо','шт');
$randGen = new RandomNumberGenerator(1,10);

$chicken1 = new FarmAnimal(1,'курица',$eggResource,$randGen);

$tempResource = new FarmAnimalResource();
$quantity = 0;

$chicken1->giveResourceToOwner($tempResource,$quantity);

var_dump($tempResource);
var_dump($quantity);
