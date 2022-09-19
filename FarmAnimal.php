<?php

class FarmAnimal extends FarmAnimalBase implements GivingResourceInterface
{
   private float $dailyMultiplicator;


   private RandomNumberGeneratorInterface $randomNumberGenerator;
   private FarmAnimalResourceInterface $farmAnimalResource;

   /**
    * @throws Exception if $p_dailyMultiplicator <= 0 
    */
   public function __construct(
      int $p_id, 
      string $p_species,
      FarmAnimalResourceInterface $p_farmAnimalResource,
      RandomNumberGeneratorInterface $p_randomNumberGenerator,
      float $p_dailyMultiplicator = 1.0
   )
   {
      parent::__construct($p_id,$p_species);

      $this->randomNumberGenerator = $p_randomNumberGenerator;
      $this->farmAnimalResource = $p_farmAnimalResource;

      if ($p_dailyMultiplicator <= 0)
         throw new Exception("Daily multiplicator for a resource must be greater than 0");

      $this->dailyMultiplicator = $p_dailyMultiplicator;
   }

   public function giveResourceToOwner(
      FarmAnimalResourceInterface &$p_outFarmAnimalResource,
      int &$p_outQuantity
   )
   {
      $p_outFarmAnimalResource = clone $this->farmAnimalResource;
      $p_outQuantity = $this->randomNumberGenerator->getRandomNumber();

      $p_outQuantity *= $this->dailyMultiplicator;
   }

}