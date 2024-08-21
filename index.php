<?php

$devs = ["Abed Hossain", "Hridoy", "Al Amin", "Abdullah", "Ananto"];

array_push($devs, "Sarvee", "Sujon");

array_pop($devs);

echo "<pre>";
print_r($devs);
echo "</pre>";


$students = ["Ashik", "Sajeed", "Sojol", "Kajol", "Kashem"];

array_unshift($students, "Korim", "Abdullah");

array_shift($students);

echo "<pre>";
print_r($students);
echo "</pre>";


$a = array_merge($devs, $students);

echo "<pre>";
print_r($a);
echo "</pre>";

$b = array_combine($devs, $students);

echo "<pre>";
print_r($b);
echo "</pre>";

echo "<pre>";
print_r(array_change_key_case($b, CASE_UPPER));
echo "</pre>";

echo "<pre>";
print_r(array_change_key_case($b, CASE_LOWER));
echo "</pre>";

$c = array_rand($a);

echo "<pre>";
print_r($a[$c]);
echo "</pre>";



$d = array_slice($a, 3, 3);

echo "<pre>";
print_r($d);
echo "</pre>";


$e = array_splice($a, 6, 2); 

echo "<pre>";
print_r($e);
echo "</pre>";

echo "<pre>";
print_r(current($a));
echo "</pre>";

echo "<pre>";
print_r(end($a));
echo "</pre>";

echo "<pre>";
print_r(next($devs));
echo "</pre>";

echo "<pre>";
print_r(prev($devs));
echo "</pre>";

echo "<pre>";
print_r(array_chunk($a, 3));
echo "</pre>";







?>