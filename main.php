<?php

define('PATH_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('PATH_INTERFACES', PATH_ROOT . 'interfaces' . DIRECTORY_SEPARATOR);

require_once PATH_INTERFACES . 'FarmAnimalInterface.php';
require_once PATH_INTERFACES . 'HasIntegerIdInterface.php';

require_once PATH_INTERFACES . 'ResourceDataStoreInterface.php';
require_once PATH_INTERFACES . 'ResourceDataExportInterface.php';
require_once PATH_INTERFACES . 'FarmAnimalResourceInterface.php';
require_once PATH_INTERFACES . 'FarmAnimalInventoryInterface.php';
require_once PATH_INTERFACES . 'RandomNumberGeneratorInterface.php';
require_once PATH_INTERFACES . 'GivingResourceInterface.php';
require_once PATH_INTERFACES . 'IntegerIdGeneratorInterface.php';
require_once PATH_INTERFACES . 'AnimalDataStoreInterface.php';
require_once PATH_INTERFACES . 'AnimalDataExportInterface.php';

require_once PATH_ROOT . 'ResourceCollector.php';
require_once PATH_ROOT . 'FarmAnimalResource.php';
require_once PATH_ROOT . 'FarmAnimalBase.php';
require_once PATH_ROOT . 'FarmAnimal.php';
require_once PATH_ROOT . 'RandomNumberGenerator.php';
require_once PATH_ROOT . 'FarmAnimalInventory.php';
require_once PATH_ROOT . 'NumberSequence.php';

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
/*
$eggResource = new FarmAnimalResource('яйцо','шт');
$randGen = new RandomNumberGenerator(1,10);

$chicken1 = new FarmAnimal(1,'курица',$eggResource,$randGen);

$tempResource = new FarmAnimalResource();
$quantity = 0;

$chicken1->giveResourceToOwner($tempResource,$quantity);

var_dump($tempResource);
var_dump($quantity);
*/

// (2) "08 RandomNumberGenerator works!"
/*
$uniqueId = 1
$animalSpecies = 'курица';
$eggResource = new FarmAnimalResource('яйцо','шт');
$randGen = new RandomNumberGenerator(1,10);

$chicken1 = new FarmAnimal($uniqueId,$animalSpecies,$eggResource,$randGen);

$tempResource = new FarmAnimalResource();
$quantity = null;

$chicken1->giveResourceToOwner($tempResource,$quantity);

var_dump($tempResource);
var_dump($quantity);
*/

// "10 FarmAnimalInventory first step"
/*
$farmAnimalInventory = new FarmAnimalInventory();

print $farmAnimalInventory->getDataAsJson();
*/

// temp
/*
$chicken1 = new FarmAnimal(
   1,
   'курица',
   new FarmAnimalResource('яйцо','шт'),
   new RandomNumberGenerator(1,10)
);

$chicken2 = new FarmAnimal(
   2,
   'курица',
   new FarmAnimalResource('яйцо','шт'),
   new RandomNumberGenerator(1,10)
);

$cow1 = new FarmAnimal(
   3,
   'корова',
   new FarmAnimalResource('молоко','л'),
   new RandomNumberGenerator(8,12)
);



$farmAnimalInventory = new FarmAnimalInventory();

print $farmAnimalInventory->getDataAsJson();
*/

// "13 Unique ID generation works!"
/*
print NumberSequence::generateUniqueIntegerId();
print NumberSequence::generateUniqueIntegerId();
print NumberSequence::generateUniqueIntegerId();
print NumberSequence::generateUniqueIntegerId();
*/

// "14 Implement NumberSequence setFirstItem"
/*
NumberSequence::setFirstItem(100);

print NumberSequence::generateUniqueIntegerId();
print NumberSequence::generateUniqueIntegerId();
print NumberSequence::generateUniqueIntegerId();
print NumberSequence::generateUniqueIntegerId();
*/

///////////////////////////////////////////////////////////////////////////

$milk = new FarmAnimalResource('молоко','л');
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

$report = $resourceCollector->getResourceDataAsJsonArray();

var_dump($report);
