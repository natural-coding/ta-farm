<?php

interface GivingResourceInterface
{
   function giveResourceToOwner(
      FarmAnimalResourceInterface &$p_outFarmAnimalResource,
      int &$p_outQuantity
   );
}


