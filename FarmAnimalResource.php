<?php

/**
 * Represents resource which a farm animal gives to the owner
 * It can be milk, eggs, meat for example
 * 
 * Usage example:
 * new FarmAnimalResource('молоко', 'л')
 * new FarmAnimalResource('мясо', 'кг')
 * new FarmAnimalResource('шерсть', 'кг')
 */
class FarmAnimalResource implements FarmAnimalResourceInterface
{
   public string $resourceName;
   public string $units;

   function __construct(string $p_resourceName, string $p_units)
   {
      $this->resourceName = $p_resourceName;
      $this->units = $p_units;
   }

   function getName() : string
   {
      return $this->resourceName;
   }

   function getUnits() : string
   {
      return $this->units;
   }
}
