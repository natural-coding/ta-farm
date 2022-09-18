<?php
interface AnimalDataStoreInterface
{
   function add(FarmAnimalBase $p_farmAnimal) : AnimalDataStoreInterface;
}