<?php

class RandomNumberGenerator implements RandomNumberGeneratorInterface
{
   private int $min;
   private int $max;

   public function __construct(int $p_min, int $p_max)
   {
      $p_min = \min($p_min,$p_max);
      $p_max = \max($p_min,$p_max);

      $this->setMinMax($p_min, $p_max);
   }

   private function setMinMax(int $p_min, int $p_max)
   {
      $this->min = $p_min;
      $this->max = $p_max;
   }

   function getRandomNumber() : int
   {
      return random_int($this->min,$this->max);
   }

}