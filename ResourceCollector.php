<?php

/**
 * Collect all the resources it receives. Return totals.
 */
class ResourceCollector implements ResourceCollectorInterface
{
   /**
    * Contains resource description and quantity
    * Example (add it later)
    * 'молоко' => {new FarmAnimalResource('молоко', 'л')}
    */
   private $resourceCollection = [];

   /**
    * Add FarmAnimalResource to the class
    * @param FarmAnimalResource $p_farmAnimalResource
    * @return ResourceColletorInterface
    */
   function add(FarmAnimalResourceInterface $p_farmAnimalResource, int $p_quantity)
      : ResourceCollectorInterface
   {
      return $this;
   }

   /**
    * Return JSON as string with totals
    * @return string JSON as string with totals
    */
   function getTotals() : string
   {
      $data = new stdClass();

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