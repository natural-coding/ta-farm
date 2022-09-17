<?php

class FarmAnimal extends FarmAnimalAbstract implements GivingResourceInterface
{
   private RandomNumberGeneratorInterface $randomNumberGenerator;
   private FarmAnimalResourceInterface $farmAnimalResource;

   public function __construct(
      int $p_id, 
      string $p_species,
      FarmAnimalResourceInterface $p_farmAnimalResource,
      RandomNumberGeneratorInterface $p_randomNumberGenerator
   )
   {
      parent::__construct($p_id,$p_species);

      $this->randomNumberGenerator = $p_randomNumberGenerator;
      $this->farmAnimalResource = $p_farmAnimalResource;
   }

   public function giveResourceToOwner(
      FarmAnimalResourceInterface &$p_outFarmAnimalResource,
      int &$p_outQuantity
   )
   {
      $p_outFarmAnimalResource = clone $this->farmAnimalResource;
      $p_outQuantity = $this->randomNumberGenerator->getRandomNumber();
   }

}