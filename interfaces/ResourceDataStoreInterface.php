<?php

interface ResourceDataStoreInterface
{
   /**
    * Add FarmAnimalResource to the class
    * @param FarmAnimalResource $p_farmAnimalResource
    * @return ResourceColletorInterface
    */
   function add(FarmAnimalResourceInterface $p_farmAnimalResource, int $p_quantity)
      : ResourceDataStoreInterface;
}