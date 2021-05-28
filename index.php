<?php

// $greeting = "Bonjour";

// $number = 1234578967.12345;

// echo($greeting). '<br>'; 


// echo number_format($number, 2, ',', '');


// $name = 'Zura';
// $string1 = 'Hello I am ' .$name. ' . I am 28';
// $string2 = "Hello I am .$name I am 28 ";

// echo($string1). '<br>'; 
// echo($string2). '<br>'; 

// $longText = " Hello, my naqme is Zura
//             I am 27,
//             T lover my daughter
// ";

// echo $longText. '<br>'; 

// echo nl2br ($longText). '<br>'; 

// Create array

$fruits = ["Banana", "Apple", "Orange"];
echo  '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits[0].'<br>';

// Check if array has element at index

isset($fruits[2]); // true

// Append element
$fruits[] = 'Mangue';

echo  '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the lenght of the array
echo count($fruits).'<br>';
// Add element at the end of the array
array_push($fruits, 'foo');
// Print the lenght of the array
echo  '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the 
echo array_pop($fruits);

echo  '<pre>';
var_dump($fruits);
echo '</pre>';
// Add element nat the beginnig of thre array
array_unshift($fruits, 'bar');

echo  '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the binning of the array

echo array_shift($fruits);

// Split the string into an array
$string = "Banna, Apple, Peach";
echo  '<pre>';
var_dump (explode(", ", $string));

echo '</pre>';


