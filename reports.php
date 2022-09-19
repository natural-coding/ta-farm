<?php
namespace natcod\farm\reports;

function BuildFarmAnimalTableReport(array $p_animalDataGroupedJsonArray) : string
{
   $REPORT_WIDTH = 43;

   $outStr = GetReportTitle('Animals',$REPORT_WIDTH) . PHP_EOL
      . GetHorizontalLine($REPORT_WIDTH) . PHP_EOL;

   $headers = ['Title', 'Amount'];

   $outStr .= sprintf('|%-20s|%-20s|', $headers[0], $headers[1]) . PHP_EOL
      . GetHorizontalLine($REPORT_WIDTH) . PHP_EOL;
   
   foreach($p_animalDataGroupedJsonArray as $rec)
   {
      $outStr .= sprintf('|%-20s|%20s|', $rec->speciesName, $rec->animalCount) . PHP_EOL;
   }

   $outStr .= GetHorizontalLine($REPORT_WIDTH) . PHP_EOL;

   return $outStr;
}

function BuildGatheredResourcesReport(array $p_resourceDataJsonArray) : string
{
   $REPORT_WIDTH = 44;

   $outStr = GetReportTitle('Resources',$REPORT_WIDTH) . PHP_EOL
      . GetHorizontalLine($REPORT_WIDTH) . PHP_EOL;

   $headers = ['Title', 'Units', 'Amount'];

   $outStr .= sprintf('|%-20s|%-10s|%-10s|', $headers[0], $headers[1], $headers[2]) . PHP_EOL
      . GetHorizontalLine($REPORT_WIDTH) . PHP_EOL;
   
   foreach($p_resourceDataJsonArray as $rec)
   {
      $outStr .= sprintf(
         '|%-20s|%-10s|%10s|',
         $rec->resourceName,
         $rec->units,
         $rec->quantity
      ) . PHP_EOL;
   }

   $outStr .= GetHorizontalLine($REPORT_WIDTH) . PHP_EOL;

   return $outStr;

}

function GetReportTitle(string $p_title, int $p_reportWithInAsciiChars = 0) : string
{
   $title = '>>> [' . $p_title . ']<<<';

   $title = str_pad(
         $title,
         $p_reportWithInAsciiChars,
         ' ',
         STR_PAD_BOTH
      );

   return $title;
}

function GetHorizontalLine(int $p_reportWithInAsciiChars) : string
{
   return str_pad(
      '',
      $p_reportWithInAsciiChars,
      '-',
      STR_PAD_BOTH
   );
}