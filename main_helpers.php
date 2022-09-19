<?php
namespace natcod\farm\helpers;

function AddAnimalsToFarm(\FarmAbstract $p_farm)
{
   define('CHICKEN_COUNT',1);
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
   $cowDailyMultiplicator = 2;

   for($i = 0; $i < COW_COUNT; $i++)
      $p_farm->addAnimal(
         new \FarmAnimal(
            \NumberSequence::generateUniqueIntegerId(),
            $cowSpeciesName,
            $cowResourceMilk,
            $cowResourceRandGen,
            $cowDailyMultiplicator
         )         
      );

}

function AddAnimalsToFarmEn(\FarmAbstract $p_farm)
{
   define('CHICKEN_COUNT',1);
   define('COW_COUNT',1);

   $chickenSpeciesName = 'chicken';
   $chickenResourceEgg = new \FarmAnimalResource('egg','');
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

   $cowSpeciesName = 'cow';
   $cowResourceMilk = new \FarmAnimalResource('milk','L');
   $cowResourceRandGen = new \RandomNumberGenerator(8,12);
   $cowDailyMultiplicator = 2;

   for($i = 0; $i < COW_COUNT; $i++)
      $p_farm->addAnimal(
         new \FarmAnimal(
            \NumberSequence::generateUniqueIntegerId(),
            $cowSpeciesName,
            $cowResourceMilk,
            $cowResourceRandGen,
            $cowDailyMultiplicator
         )         
      );

}


function AddExtraAnimalsToFarm(\FarmAbstract $p_farm)
{
   
}