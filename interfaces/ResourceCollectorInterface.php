<?php 

interface ResourceCollectorInterface
{
   /**
    * Add FarmAnimalResource to the class
    * @param FarmAnimalResource $p_farmAnimalResource
    * @return ResourceColletorInterface
    */
   function add(FarmAnimalResourceInterface $p_farmAnimalResource, int $p_quantity)
      : ResourceCollectorInterface;


   /**
    * Return JSON as string with totals
    * @return string JSON as string with totals
    */
   function getTotals() : string;
   
}