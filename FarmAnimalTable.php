<?php

class FarmAnimalTable extends FarmAnimalTableAbstract
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

   /**
    * Returns an array
    * Example
    */
/*      return [
         [
            "species" => 'корова',
            "animalCount" => 10
         ],
         [
            "species" => 'курица',
            "animalCount" => 20
         ]
      ];
*/   

   function getAnimalDataGroupedAsJsonArray() : array
   {
      $outArray = [];
      /**
       * key is a species name
       * value is amount of animals
       */
      $statArray = [];

      foreach($this->farmAnimalsArray as $farmAnimal)
      {
         $key = $farmAnimal->getSpecies();
         if (array_key_exists($key, $statArray))
            $statArray[$key]++;
         else
            $statArray[$key] = 1;
      }

      ksort($statArray);

      foreach($statArray as $speciesName => $count)
      {
         $val = new stdClass();
         $val->speciesName = $speciesName;
         $val->animalCount = $count;

         array_push($outArray,$val);
      }

      return $outArray;
   }

   /**
    * Do not allow to add the same animal Id twice
    * @throws Exception if the same animal Id is already in $this->farmAnimalsArray
    */
   function checkIsIdUnique(int $p_Id)
   {
      // Do not optimize too early!
      // It is O(n^2) anyway! ;-)
      foreach($this->farmAnimalsArray as $farmAnimal)
         if ($farmAnimal->getId() === $p_Id)
            throw new Exception("Animal ID = $p_Id already exists");
   }

}