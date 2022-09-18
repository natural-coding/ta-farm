<?php

abstract class FarmAnimalBase implements FarmAnimalInterface, HasIntegerIdInterface
{
   protected string $species;
   protected int $id;

   protected function __construct(int $p_id, string $p_species)
   {
      $this->setId($p_id);
      $this->setSpecies($p_species);
   }

   protected function setSpecies(string $p_species)
   {
      $this->species = $p_species;
   }

   /**
    * The following functions implement FarmAnimalInterface
    */
   function getSpecies() : string
   {
      return $this->species;
   }

   protected function setId(int $p_id)
   {
      $this->id = $p_id;
   }

   /**
    * The following function implement HasIntegerIdInterface
    */
   function getId() : int
   {
      return $this->id;
   }

}