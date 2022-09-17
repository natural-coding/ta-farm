<?php

class FarmAnimalInventory implements FarmAnimalInventoryInterface
{
   private $farmAnimalsArray = [];

   function add(FarmAnimalInterface $p_farmAnimalInterface, int $p_quantity = 1)
   {

   }

   function getDataAsJson() : string
   {
      return 'Hello! :-)';
   }
}