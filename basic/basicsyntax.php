<?php
//Basic php syntax and commands

//============================================================

/*
•Comments:
 -One line comment: # or // - Example: //Comment or #Comment
 -Multiple lines comment: - Example:  line 1 line 2 line3 etc 


•Variables Syntax:
 -Syntax: $name = <values>;
 -Notes:
   -all variables start with $(dollar sign)
   -php is case sensitive, so: name != Name
   -the name must be in camel case(in case it have multiple words): Example: nameInCamelCase
   -name cannot start with numbers, only with a letter or undescore(_): Example: Wrong($1var) Right($_Var1)
   -name can only contain alpha-numeric characters and underscores(A-z, 0-9, and _ ): Example: Right($Name_1) Wrong($Name&1)
  
 •Data types:
  -Data types in PHP:
   -Example:
    $wholeNumber = 10; // int
    $decimalNumber = 0.5; // double, float or decimal
    $myCharacter = "p"; // character
    $myString = "Hello World!"; // string
    $myBoolean = true; // boolean - true/false
    $myArray = array(<values>); // array - Example: array(1, 2, 3, 4, 5); - array("Hello", "World");
  -Php is a weakly typed language.That means you don't need to declare the variable type, neither need to cast
   them, because PHP do those things automatically.
   -Example:
    $var1 = 10; //You've set the int var1 value as 10
    $var1 = "TI Expert"; // Now, var1 is a string with "TI Expert" as it's value
    $var1 = false; // Now, var1 is boolean and it's value is true
  
  
  •Output command in PHP:
   -We use the echo command in PHP to output strings to the user
    -Example:
     echo "Hello World!!!"; // Output: Hello World!!!
   -We can use echo to output arithmetic operations too:
    -Example:
     echo 7 * 5; //Output: 35
  
  •Concatenation:
   -To join multiple strings, we use the concatenation operator (.).Note that other languages usually use the
    (+) as concatenation operator.
    -Example:
     echo "Hello " . "World!!!"; //Output: Hello World!!!
*/
?>
