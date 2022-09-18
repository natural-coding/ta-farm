<?php

class FarmAnimalTable implements AnimalDataStoreInterface, AnimalDataExportInterface
{
   private $farmAnimalsArray = [];

   function add(FarmAnimalBase $p_farmAnimal) : AnimalDataStoreInterface
   {
      $this->checkIsIdUnique($p_farmAnimal->getId());
      array_push($this->farmAnimalsArray, $p_farmAnimal);

      return $this;
   }

   function getAnimalDataAsArray() : array
   {
      return $this->farmAnimalsArray;
   }

   function getAnimalDataGroupedAsJsonArray() : array
   {
      return [];
   }

   /**
    * Do not allow to add the same animal Id twice
    * @throws Exception if the same animal Id is already in $this->farmAnimalsArray
    */
   function checkIsIdUnique(int $p_Id)
   {
      foreach($this->farmAnimalsArray as $farmAnimal)
         if ($farmAnimal->getId() === $p_Id)
            throw new Exception("Animal ID = $p_Id already exists");
   }

}