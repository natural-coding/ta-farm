<?php

class FarmAnimalTable implements AnimalDataStoreInterface, AnimalDataExportInterface
{
   function add(FarmAnimalBase $p_farmAnimal) : StoresAnimalDataInterface
   {
      return $this;
   }

   function getAnimalDataAsArray() : array
   {
      return [];
   }

   function getAnimalDataAsJsonRaw() : stdClass
   {
      return new stdClass;
   }

}