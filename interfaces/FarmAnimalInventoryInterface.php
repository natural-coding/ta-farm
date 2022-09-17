<?php
interface FarmAnimalInventoryInterface
{
   function add(FarmAnimalInterface $p_farmAnimalInterface, int $p_quantity = 1);
   function getDataAsJson() : string;
}