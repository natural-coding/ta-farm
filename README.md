## ta-farm

A test assignment completed 99% as it has a well defined architecture. :-) The source code follows the SOLID principles (but not PSR recommendations) 

### Requirements
- PHP 7.4+ (type hints in class declaration)

### Example

#### Source code

```php
$chicken1 = new FarmAnimal(
   1,
   'курица',
   new FarmAnimalResource('яйцо','шт'),
   new RandomNumberGenerator(1,10)
);

$chicken2 = new FarmAnimal(
   2,
   'курица',
   new FarmAnimalResource('яйцо','шт'),
   new RandomNumberGenerator(1,10)
);

$chicken3 = new FarmAnimal(
   10,
   'курица',
   new FarmAnimalResource('яйцо','шт'),
   new RandomNumberGenerator(1,10)
);

$chicken4 = new FarmAnimal(
   11,
   'курица',
   new FarmAnimalResource('яйцо','шт'),
   new RandomNumberGenerator(1,10)
);

$cow1 = new FarmAnimal(
   3,
   'корова',
   new FarmAnimalResource('молоко','л'),
   new RandomNumberGenerator(8,12)
);

$cow2 = new FarmAnimal(
   4,
   'корова',
   new FarmAnimalResource('молоко','л'),
   new RandomNumberGenerator(8,12)
);


$farmAnimalTable = new FarmAnimalTable();
$resourceCollector = new ResourceCollector();

$farm = new Farm($farmAnimalTable,$resourceCollector);
$farm->addAnimal($chicken1);
$farm->addAnimal($chicken2);
$farm->addAnimal($chicken3);
$farm->addAnimal($chicken4);

$farm->addAnimal($cow1);
$farm->addAnimal($cow2);
$farm->gatherResourcesFromAnimals();

print_r($farm->getAnimalDataGroupedAsJsonArray());
print_r($farm->getResourceDataAsJsonArray());

```
#### Output
```text
>php src/main.php
Array
(
    [0] => stdClass Object
        (
            [speciesName] => корова
            [animalCount] => 2
        )

    [1] => stdClass Object
        (
            [speciesName] => курица
            [animalCount] => 4
        )

)
Array
(
    [0] => stdClass Object
        (
            [resourceName] => молоко
            [units] => л
            [quantity] => 20
        )

    [1] => stdClass Object
        (
            [resourceName] => яйцо
            [units] => шт
            [quantity] => 15
        )

)
```