<?php

/**
 * It is the main class of an application
 */
 final class Farm implements AnimalDataStoreInterface, AnimalDataExportInterface, ResourceDataExportInterface
{
   private FarmAnimalTableAbstract $farmAnimalTable;
   private ResourceCollectorAbstract $resourceCollector;

   function __construct(
      FarmAnimalTableAbstract $p_farmAnimalTable,
      ResourceCollectorAbstract  $p_ResourceCollector
   )
   {
      $this->farmAnimalTable = $p_farmAnimalTable;
      $this->resourceCollector = $p_ResourceCollector;
   }

   function add(FarmAnimalBase $p_farmAnimal) : AnimalDataStoreInterface
   {
      $this->farmAnimalTable->add($p_farmAnimal);

      return $this;
   }

   function getAnimalDataAsArray() : array
   {
      return $this->farmAnimalTable->getAnimalDataAsArray();
   }

   function getAnimalDataGroupedAsJsonArray() : array
   {
      return $this->farmAnimalTable->getAnimalDataGroupedAsJsonArray();
   }

   function getResourceDataAsJsonArray() : array
   {
      return $this->resourceCollector->getResourceDataAsJsonArray();
   }

}