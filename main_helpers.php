<?php
namespace natcod\farm\helpers;

function AddAnimalsToFarm(\FarmAbstract $p_farm)
{
   define('CHICKEN_COUNT',2);
   define('COW_COUNT',1);

   $chickenSpeciesName = 'курица';
   $chickenResourceEgg = new \FarmAnimalResource('яйцо','шт');
   $chickenResourceRandGen = new \RandomNumberGenerator(0,2);

   for($i = 0; $i < CHICKEN_COUNT; $i++)
      $p_farm->addAnimal(
         new \FarmAnimal(
            \NumberSequence::generateUniqueIntegerId(),
            $chickenSpeciesName,
            $chickenResourceEgg,
            $chickenResourceRandGen
         )         
      );

   $cowSpeciesName = 'корова';
   $cowResourceMilk = new \FarmAnimalResource('молоко','л');
   $cowResourceRandGen = new \RandomNumberGenerator(8,12);

   for($i = 0; $i < COW_COUNT; $i++)
      $p_farm->addAnimal(
         new \FarmAnimal(
            \NumberSequence::generateUniqueIntegerId(),
            $cowSpeciesName,
            $cowResourceMilk,
            $cowResourceRandGen
         )         
      );

}

function AddExtraAnimalsToFarm(\FarmAbstract $p_farm)
{
   
}