<?php

define('PATH_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('PATH_INTERFACES', PATH_ROOT . 'interfaces' . DIRECTORY_SEPARATOR);
define('PATH_ABSTRACTS', PATH_ROOT . 'abstracts' . DIRECTORY_SEPARATOR);

require_once PATH_INTERFACES . 'FarmAnimalInterface.php';
require_once PATH_INTERFACES . 'HasIntegerIdInterface.php';

require_once PATH_INTERFACES . 'ResourceDataStoreInterface.php';
require_once PATH_INTERFACES . 'ResourceDataExportInterface.php';
require_once PATH_INTERFACES . 'FarmAnimalResourceInterface.php';
require_once PATH_INTERFACES . 'RandomNumberGeneratorInterface.php';
require_once PATH_INTERFACES . 'GivingResourceInterface.php';
require_once PATH_INTERFACES . 'IntegerIdGeneratorInterface.php';
require_once PATH_INTERFACES . 'AnimalDataStoreInterface.php';
require_once PATH_INTERFACES . 'AnimalDataExportInterface.php';
require_once PATH_INTERFACES . 'FarmGatherResourcesFromAnimalsDailyInterface.php';

require_once PATH_ABSTRACTS . 'FarmAnimalTableAbstract.php';
require_once PATH_ABSTRACTS . 'ResourceCollectorAbstract.php';
require_once PATH_ABSTRACTS . 'FarmAbstract.php';

require_once PATH_ROOT . 'ResourceCollector.php';
require_once PATH_ROOT . 'FarmAnimalResource.php';
require_once PATH_ROOT . 'FarmAnimalBase.php';
require_once PATH_ROOT . 'FarmAnimal.php';
require_once PATH_ROOT . 'RandomNumberGenerator.php';
require_once PATH_ROOT . 'FarmAnimalTable.php';
require_once PATH_ROOT . 'NumberSequence.php';
require_once PATH_ROOT . 'Farm.php';
require_once PATH_ROOT . 'main_helpers.php';
require_once PATH_ROOT . 'reports.php';

$farm = new Farm(
      new FarmAnimalTable(),
      new ResourceCollector()
   );

natcod\farm\helpers\printGreetingMessage();
natcod\farm\helpers\log('Добавляем животных на ферму');
natcod\farm\helpers\AddAnimalsToFarmEn($farm);

$farmAnimalTableReport = natcod\farm\reports\BuildFarmAnimalTableReport($farm->getAnimalDataGroupedAsJsonArray());

print $farmAnimalTableReport . PHP_EOL;

natcod\farm\helpers\log('Собираем продукцию животноводства в течение недели');
// Gather resources from animals
for ($day = 0; $day < 7; $day++)
{
   $farm->gatherResourcesFromAnimalsDaily();
}

$gatheredResourcesReport = natcod\farm\reports\BuildGatheredResourcesReport($farm->getResourceDataAsJsonArray());

print $gatheredResourcesReport . PHP_EOL;

natcod\farm\helpers\log('Добавляем ещё животных');
natcod\farm\helpers\AddExtraAnimalsToFarmEn($farm);

$farmAnimalTableReport = natcod\farm\reports\BuildFarmAnimalTableReport($farm-> getAnimalDataGroupedAsJsonArray());

print $farmAnimalTableReport . PHP_EOL;

natcod\farm\helpers\log('Ещё одну неделю собираем продукцию');
// Gather resources from animals
for ($day = 0; $day < 7; $day++)
{
   $farm->gatherResourcesFromAnimalsDaily();
}

$gatheredResourcesReport = natcod\farm\reports\BuildGatheredResourcesReport($farm->getResourceDataAsJsonArray());

print $gatheredResourcesReport;

natcod\farm\helpers\printGoodByeMessage();