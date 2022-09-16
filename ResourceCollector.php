<?php

/**
 * Collect all the resources from farm animals
 */
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
      $data = new \stdClass();

      $data->resourceName = "молоко";
      $data->units = "л";
      $data->quantity = 1028;

      $data2 = clone $data;

      $data2->resourceName = "яйцо";
      $data2->units = "шт";
      $data2->quantity = 15;

      return
         json_encode(
            [$data, $data2]
         );
   }   
}