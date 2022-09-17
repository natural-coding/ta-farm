<?php

class FarmAnimal extends FarmAnimalAbstract
{
   private RandomNumberGeneratorInterface $randomNumberGenerator;
   private FarmAnimalResourceInterface $farmAnimalResource;

   public function __construct(
      int $p_id, 
      string $p_species,
      RandomNumberGeneratorInterface $p_randomNumberGenerator,
      FarmAnimalResourceInterface $p_farmAnimalResource
   )
   {
      parent::__construct($p_id,$p_species);

      $this->randomNumberGenerator = $p_randomNumberGenerator;
      $this->farmAnimalResource = $p_farmAnimalResource;
   }
}