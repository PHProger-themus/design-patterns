<?php

use flyweight\classes\EntityFactory;
use flyweight\classes\Entity;
use flyweight\classes\EntityType;

require_once(dirname(__DIR__) . "/autoload.php");

$types_storage = new EntityFactory([
    [1, 'String'],
    [2, 'Array'],
    [1, 'Boolean'],
    [1, 'Array']
]);

$string_one = $types_storage->getObjectType(1, 'String');
$array_three = $types_storage->getObjectType(3, 'Array');

$entities = [
    new Entity('string_var1', $string_one),
    new Entity('string_var2', $string_one),
    new Entity('string_var3', $string_one),
    new Entity('string_var4', $string_one),
    new Entity('array_var1', $array_three),
    new Entity('array_var2', $array_three),
    new Entity('array_var3', $array_three),
    new Entity('array_var4', $array_three),
    new Entity('array_var5', $array_three),
];

foreach ($entities as $entity) {
    $entity->get();
}

// Let's output data using type:

$string_one->get('string_var5');