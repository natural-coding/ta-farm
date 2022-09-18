<?php

class FarmAnimalInventory implements FarmAnimalInventoryInterface
{
   /**
    * It stores farm animals
    * An array key is a species name
    * A value is an object with two fields: 
    * - farmAnimal (represents the farm animal)
    * - quantity
    * Example
    *    $val = new stdClass();
    *    $val->farmAnimal = $p_farmAnimalInterface;
    *    $val->quantity = $p_quantity;
    */
   private $farmAnimalsArray = [];

   function add(FarmAnimalInterface $p_farmAnimalInterface)
   {
      $key = $p_farmAnimalInterface->getSpecies();

      if (array_key_exists($key, $this->farmAnimalsArray))
      {
         $this->farmAnimalsArray[$key]->quantity += $p_quantity;
      }
      else {
         $val = new stdClass();
         $val->farmAnimal = $p_farmAnimalInterface;
         $val->quantity = $p_quantity;

         $this->farmAnimalsArray[$key] = $val;
      }
   }

   function getDataAsJson() : string
   {
      print_r($this->farmAnimalsArray);

      return 'Hello! :-)';
   }
}