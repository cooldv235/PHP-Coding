<?php

echo "Hello World";

print "Hello world using print";

// Another way of calling the above functions
echo("These have parenthesis");
print("Print is marginally slower than echo");

// We can also do something like this with echo 
echo "comma","separated","words","with","echo";

// Variable example
$name = "Joe Doe";
echo $name;

// The variables in php are assigned by value
$x = 1;
$y = $x;
$x = 3;

echo $y; // y will still be 1

// TO change the value of y whenever x changes, we can use assign by reference
$y = &$x;

// strings
$str1 = 'Man';

echo 'Hello $str1'; // Hello $str1
echo "Hello $str1"; // Hello Man
echo "Hello {$str1}"; // Hello Man, more readable