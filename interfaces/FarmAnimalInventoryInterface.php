<?php
interface FarmAnimalInventoryInterface
{
   /**
    * Add a particular farm animal to the inventory
    * Each animal would have a unique identificator so 
    * it is not allowed to add more than one animal at a time
    */
   function add(FarmAnimalInterface $p_farmAnimalInterface);
   function getDataAsJson() : string;
}