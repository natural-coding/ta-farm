<?php

class ResourceCollector implements ResourceCollectorInterface
{
   /**
    * Add FarmAnimalResource to the class
    */
   function add(FarmAnimalResource $p_farmAnimalResource) : ResourceColletorInterface
   {
      return $this;
   }

   /**
    * Return JSON as string with totals
    */
   function getTotals() : string
   {

   }   
}