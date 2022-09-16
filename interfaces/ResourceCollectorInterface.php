<?php 

interface ResourceCollectorInterface
{
   function add(FarmAnimalResource $p_farmAnimalResource) : ResourceColletorInterface;
   function getTotals() : string;
   
}