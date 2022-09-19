<?php

final class NumberSequence implements IntegerIdGeneratorInterface
{
   private static int $lastItem = 1;
   private static bool $sequenceItemAlreadyGeneratedFlag = false;


   static function generateUniqueIntegerId() : int
   {
      self::$sequenceItemAlreadyGeneratedFlag = true;

      return self::$lastItem++;
   }

   static function setFirstItem(int $p_firstItem)
   {
      if (!self::$sequenceItemAlreadyGeneratedFlag)
      {
         self::$lastItem = $p_firstItem;
      }
   }
}