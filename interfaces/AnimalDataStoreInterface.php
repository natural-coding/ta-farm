<?php
interface AnimalDataStoreInterface
{
   function addAnimal(FarmAnimalBase $p_farmAnimal) : AnimalDataStoreInterface;
}