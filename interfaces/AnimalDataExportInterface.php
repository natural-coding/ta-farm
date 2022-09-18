<?php
interface AnimalDataExportInterface
{
   /**
    * It returns an indexed array of FarmAnimalBase instances
    */
   function getAnimalDataAsArray() : array;
   function getAnimalDataAsJsonRaw() : stdClass;
}