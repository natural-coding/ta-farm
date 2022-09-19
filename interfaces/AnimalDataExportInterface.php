<?php
interface AnimalDataExportInterface
{
   /**
    * It returns an indexed array of FarmAnimalBase instances
    */
   function getAnimalDataAsArray() : array;
   /**
    * In fact it returns animal data grouped by a species
    * It is similar to group by clause in SQL
    */
   function getAnimalDataGroupedAsJsonArray() : array;
}