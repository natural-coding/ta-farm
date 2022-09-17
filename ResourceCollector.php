<?php

/**
 * Collect all the resources it receives. Return totals.
 */
class ResourceCollector implements ResourceCollectorInterface
{
   /**
    * It stores farm animals' resources
    * An array key is a resource name
    * A value is an object with two fields:
    * - resource (represents the resource)
    * - quantity
    * Example:
    *  $val = new stdClass();
    *  $val->resource = $p_farmAnimalResource;
    *  $val->quantity = $p_quantity;
    */
   private $resourceCollectionArray = [];

   /**
    * Add FarmAnimalResource to the class
    * @param FarmAnimalResource $p_farmAnimalResource
    * @return ResourceCollectorInterface
    */
   function add(FarmAnimalResourceInterface $p_farmAnimalResource, int $p_quantity)
      : ResourceCollectorInterface
   {
      $key = $p_farmAnimalResource->getName();

      if (array_key_exists($key, $this->resourceCollectionArray))
      {
         $this->resourceCollectionArray[$key]->quantity += $p_quantity;
      }
      else
      {
         $val = new stdClass();
         $val->resource = $p_farmAnimalResource;
         $val->quantity = $p_quantity;

         $this->resourceCollectionArray[$key] = $val;
      }

      return $this;
   }

   /**
    * Return JSON as string with totals
    * @return string JSON as string with totals
    */
   function getTotals() : string
   {
      $outputArray = [];

      foreach($this->resourceCollectionArray as $item)
      {
         $data = new \stdClass();

         $data->resourceName = $item->resource->getName();
         $data->units = $item->resource->getUnits();
         $data->quantity = $item->quantity;

         array_push($outputArray,$data);
      }

      return json_encode($outputArray);

   }   
}