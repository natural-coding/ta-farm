<?php

abstract class FarmAbstract implements AnimalDataStoreInterface, AnimalDataExportInterface, ResourceDataExportInterface, FarmGatherResourcesFromAnimalsDailyInterface
{
   abstract function addAnimal(FarmAnimalBase $p_farmAnimal) : AnimalDataStoreInterface;
   abstract function getAnimalDataAsArray() : array;
   abstract function getAnimalDataGroupedAsJsonArray() : array;
   abstract function getResourceDataAsJsonArray() : array;
   abstract function gatherResourcesFromAnimalsDaily();
}