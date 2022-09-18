<?php

interface ResourceDataExportInterface
{
   /**
    * It returns array of stdClass instances
    * You can encode this array using json_encode() further
    * 
    * @return array
    */
   function getResourceDataAsJsonArray() : array;
}