<?php
namespace natcod\farm\reports;

function BuildFarmAnimalTableReport(array $p_animalDataGroupedJsonArray) : string
{
   $outStr = '';

   $headers = ['Title', 'Amount'];

   $outStr = sprintf('|%20s|%20s|', $headers[0], $headers[1]) . PHP_EOL;
   
   foreach($p_animalDataGroupedJsonArray as $rec)
   {
      var_dump($rec->speciesName);
      var_dump($rec->animalCount);
      $outStr .= sprintf('|%20s|%20s|', $rec->speciesName, $rec->animalCount) . PHP_EOL;
   }

   return $outStr;
}

function BuildGatheredResourcesReport(array $p_resourceDataJsonArray) : string
{
   return 'Hello! It\'s BuildGatheredResourcesReport()';
}