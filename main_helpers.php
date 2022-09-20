<?php
namespace natcod\farm\helpers;

function AddAnimalsToFarm(\FarmAbstract $p_farm, int $p_chickenCount = 20, int $p_cowCount = 10)
{
   $chickenSpeciesName = 'курица';
   $chickenResourceEgg = new \FarmAnimalResource('яйцо','шт');
   $chickenResourceRandGen = new \RandomNumberGenerator(0,1);

   for($i = 0; $i < $p_chickenCount; $i++)
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

   for($i = 0; $i < $p_cowCount; $i++)
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

function AddAnimalsToFarmEn(\FarmAbstract $p_farm, int $p_chickenCount = 20, int $p_cowCount = 10)
{
   $chickenSpeciesName = 'chicken';
   $chickenResourceEgg = new \FarmAnimalResource('egg','item');
   $chickenResourceRandGen = new \RandomNumberGenerator(0,1);


   for($i = 0; $i < $p_chickenCount; $i++)
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

   for($i = 0; $i < $p_cowCount; $i++)
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


function AddExtraAnimalsToFarmEn(\FarmAbstract $p_farm, int $p_chickenCount = 5, int $p_cowCount = 1 )
{
   AddAnimalsToFarmEn($p_farm,$p_chickenCount,$p_cowCount);
}

function log(string $p_message, bool $p_useDots = true)
{
   $ellipsis = ($p_useDots ? '...' : '');

   print "===> $p_message{$ellipsis}" . PHP_EOL;
}

function printGreetingMessage()
{
   print PHP_EOL;
   $fUseDots = false;   
   log('Добро пожаловать!', $fUseDots);
   print PHP_EOL;
}

function printGoodByeMessage()
{
   print PHP_EOL;
   $fUseDots = false;
   print log('Хорошего Вам дня!..', $fUseDots);
}