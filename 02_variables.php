<?php

// What is a variable

// Variable types

/*
    String
    Integer
    Float/Double
    Boolean
    Null
    Array
    Object
    Resouce
*/ 

// Declare variables

$name = 'Tomasz';
$age = 36;
$isMale = true;
$height = 1.7;
$salary = null;


// Print the variables. Explain what is concatenation

echo $name.' - '.gettype($name).'<br>';
echo $age.' - '.gettype($age).'<br>';
echo $isMale.' - '. gettype($isMale).'<br>';
echo $height.' - '.gettype($height).'<br>';
echo $salary.' - '.gettype($salary).'<br>';

// Print types of the variables

echo'<br>';

echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($salary).'<br>';
echo gettype($height).'<br>';

echo'<br>';
echo'<br>';

// Print the whole variable

var_dump($name, $age, $isMale, $salary, $height);

// Change the value of the variable

// Print type of the variable

// Variable checking functions

// Check if variable is defined


echo var_dump(isset ($tomek));

// Constants

define ('PI', 3.14);
echo PI;


// Using PHP built-in constants


?>