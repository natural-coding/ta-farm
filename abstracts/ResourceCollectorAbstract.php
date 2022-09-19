<?php

abstract class ResourceCollectorAbstract implements ResourceDataStoreInterface, ResourceDataExportInterface
{
   abstract function add(FarmAnimalResourceInterface $p_farmAnimalResource, int $p_quantity)
      : ResourceDataStoreInterface;

   abstract function getResourceDataAsJsonArray() : array;   
}