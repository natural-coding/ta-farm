## ta-farm

A test assignment is ready. sprintf() and str_pad() functions do not work with Unicode (foreign characters) properly. It was tested on
 Windows 7 64-bit, PHP 7.4.26 VS15 x64 Thread Safe.

So I did use English for reports (but not for greetings! :-))


### Requirements
- PHP 7.4+ (type hints in class declaration)

### Example

#### Source code

```php
$farm = new Farm(
      new FarmAnimalTable(),
      new ResourceCollector()
   );

natcod\farm\helpers\printGreetingMessage();
natcod\farm\helpers\log('Добавляем животных на ферму');
natcod\farm\helpers\AddAnimalsToFarmEn($farm);

$farmAnimalTableReport = natcod\farm\reports\BuildFarmAnimalTableReport($farm->getAnimalDataGroupedAsJsonArray());

print $farmAnimalTableReport . PHP_EOL;


natcod\farm\helpers\log('Собираем продукцию животноводства в течение недели');
// Gather resources from animals
for ($day = 0; $day < 7; $day++)
{
   $farm->gatherResourcesFromAnimalsDaily();
}

$gatheredResourcesReport = natcod\farm\reports\BuildGatheredResourcesReport($farm->getResourceDataAsJsonArray());

print $gatheredResourcesReport . PHP_EOL;

natcod\farm\helpers\log('Добавляем ещё животных');
natcod\farm\helpers\AddExtraAnimalsToFarmEn($farm);

$farmAnimalTableReport = natcod\farm\reports\BuildFarmAnimalTableReport($farm-> getAnimalDataGroupedAsJsonArray());

print $farmAnimalTableReport . PHP_EOL;

natcod\farm\helpers\log('Ещё одну неделю собираем продукцию');
// Gather resources from animals
for ($day = 0; $day < 7; $day++)
{
   $farm->gatherResourcesFromAnimalsDaily();
}

$gatheredResourcesReport = natcod\farm\reports\BuildGatheredResourcesReport($farm->getResourceDataAsJsonArray());

print $gatheredResourcesReport;

natcod\farm\helpers\printGoodByeMessage();
```
#### Output
```text
>php src/main.php

===> Добро пожаловать!

===> Добавляем животных на ферму...
             >>> [Animals] <<<
-------------------------------------------
|Title               |Amount              |
-------------------------------------------
|chicken             |                  20|
|cow                 |                  10|
-------------------------------------------

===> Собираем продукцию животноводста в течение недели...
               >>> [Resources] <<<
-------------------------------------------------
|Title               |Units     |Amount         |
-------------------------------------------------
|egg                 |item      |            142|
|milk                |L         |           1404|
-------------------------------------------------

===> Добавляем ещё животных...
             >>> [Animals] <<<
-------------------------------------------
|Title               |Amount              |
-------------------------------------------
|chicken             |                  25|
|cow                 |                  11|
-------------------------------------------

===> Ещё одну неделю собираем продукцию...
               >>> [Resources] <<<
-------------------------------------------------
|Title               |Units     |Amount         |
-------------------------------------------------
|egg                 |item      |            305|
|milk                |L         |           2948|
-------------------------------------------------

===> Хорошего Вам дня!..
```

Enjoy!