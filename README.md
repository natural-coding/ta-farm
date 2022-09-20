# ta-farm

## Table of contents
- [Foreword](#foreword)
- [Requirements](#requirements)
- [Example](#example)
   - [Source code](#source-code)
   - [Output](#output)
- [Going further](#going-further)
   - [Configuration file](#configuration-file)
   - [Hidden dependency](#hidden-dependency)
   - [Documentation](#documentation)
   
 
## Foreword
A test assignment is ready. sprintf() and str_pad() functions do not work with Unicode (foreign characters) properly. It was tested on
 Windows 7 64-bit, PHP 7.4.26 VS15 x64 Thread Safe.

So I did use English for reports (but not for greetings! :-))

## Requirements
- PHP 7.4+ (type hints in class declaration)

## Example

### Source code

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
### Output
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

## Going further
### Configuration file
This project definitely has a lack of configuration file. It should store the farm animals' properties to add. Here is an example of the YAML file:
```yaml
---

# business logic
Model:
  Animals:
    - FarmAnimal:
        speciesName: "cow"
        count: 10
        resource:
          name: "milk"
          units: L
          min: 8
          max: 12
    - FarmAnimal:
        speciesName: "chicken"
        count: 20
        resource:
          name: "egg"
          units: item
          min: 0
          max: 1
script-parameters:
   id-sequence-first-item: 1
```

We could convert the document above into the JSON file ([https://www.json2yaml.com](https://www.json2yaml.com/)) and parse it using json_decode() function. (It would be OK to use the heredoc syntax or file_get_contents() function along the way ;-))

(By the way YAML and JSON formats have similarities with a Pug template engine and HTML pair.)

### Hidden dependency
There is a hidden dependecy in the code. It is a NumberSequence class which implements the singleton pattern.
```php
final class NumberSequence implements IntegerIdGeneratorInterface
{
   //...
   static function generateUniqueIntegerId() : int
   {
      //...
   }
}
```

FarmAnimal class implicitly depends on it, as the first one needs an identificator to instantiate. NumberSequence class implicitly coupled with all the codebase of a project, because it is accessible everytime to everywhere. Thus there is a lack of testability. The appropriate solution is... Do not rely on singleton pattern in the production code. :-)

### Documentation

Pictures like this should be here. They should describe the Farm class. But no such luck! :-)
![01-UML-sequence-diagram.png](https://github.com/natural-coding/ta-farm/blob/main/_dev_doc/pic/01-UML-sequence-diagram.png)
![02-interfaces.png](https://github.com/natural-coding/ta-farm/blob/05_crossing_finish_line_branch/_dev_doc/pic/02-interfaces.png)

Thanks for reading!
