<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 11:16 AM
 */
$elements = array (
    array (
        'id' => 3,
        'name' => 'Sharon',
    ),
    array (
        'id' => 2,
        'name' => 'Eva'
    ),

    array (
        'id' => 1,
        'name' => 'Millicent'
    ),

    array(
        'id' => 3,
        'name' => 'Chaka'
    )

);

$collection = new ObjectCollection($elements);//instantiation(collection) of encapsulated Class(ObjectCollection). instiate ObjectCollection to collection

$collection->sort();

echo "Sorted by ID:\n";
print_r($collection->elements);

$collection->sort();

echo "Sorted by name:\n";
print_r($collection->elements);