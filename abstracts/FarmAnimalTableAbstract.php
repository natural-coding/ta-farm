<?php

/**
 * It is created according to SOLI(D) principle
 * FarmAnimalTableAbstract is a good starting point for mock objects either
 */
abstract class FarmAnimalTableAbstract implements AnimalDataStoreInterface, AnimalDataExportInterface
{
   abstract function addAnimal(FarmAnimalBase $p_farmAnimal) : AnimalDataStoreInterface;   
   /**
    * It returns an indexed array of FarmAnimalBase instances
    */
   abstract function getAnimalDataAsArray() : array;
   /**
    * In fact it returns animal data grouped by a species
    * It is similar to group by clause in SQL
    */
   abstract function getAnimalDataGroupedAsJsonArray() : array;
}