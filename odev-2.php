<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function createRandomArrays($arr, $limit){
    $filteredArray = array_filter($arr);
    $newArray = array_rand($filteredArray, $limit);
    $result = array_map(function ($limit) use ($filteredArray){
       return $filteredArray[$limit];
    }, $newArray);
    return $result;
}

echo "<pre>";
print_r(createRandomArrays($planets, 2));
print_r(createRandomArrays($planets, 3));
print_r(createRandomArrays($planets, 2));
print_r(createRandomArrays($planets, 4));
print_r(createRandomArrays($planets, 5));