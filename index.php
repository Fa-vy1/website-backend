<?php 
// echo "my website";

 /* var_dump("my website");

echo "<br>"; */

print "my website";
$my_name = "favour";
echo "<br>";
echo "my name is $my_name <br>";

var_dump ("$my_name");

$cute = true;
echo "<br>";
var_dump ($cute);

$height = 6.1;
echo "<br>";
var_dump ($height);

$isMale = true;
echo "<br>";
var_dump ($isMale);

$full_name = array ("favour","Walker");
echo "<br>";
var_dump($full_name);

echo $full_name[0];
echo "<br>";
echo "my first name is $full_name[0]";

$nothing = null;

echo "<br>";
var_dump ($nothing);
echo "<br>";
define("pi", 3.142);
var_dump (pi);

const gravity = 10;
echo "<br>";
var_dump(gravity);
echo "<br>";

//operators
// arithmetic operators
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo '<br>';

echo $x*$y;
echo "<br>";

echo $x/$y;
echo "<br>";
// modulus
echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

$x++;
echo $x;
echo "<br>";

// assignment operators

$a = 100;
$b =50;

// addition assignment

$a += $b;
echo $a;
echo "<br>";

$a -= $b;
echo $a;
echo "<br>";


// logical operators
// examples are: AND(&&), OR(||), XOR, NOT(!)  

if ($a == 100 && $b == 50) {
    echo "confirmation is sure.";
}
echo "<br>";

if ($a == 100 || $b == 50) {
    echo "confirmation is sure.";  
}
echo "<br>";

if ($a == 100 xor $b == 52) {
    echo "confirmation is sure.";  
}
echo "<br>";

if (!($a == 101)) {
    echo "confirmation is sure.";  
}

echo "<br>";

//variable decleration
$my_name = "favour";

$present_time = date (format:"H:i") ;

echo "<br>";

echo "present_time: $present_time <br>";

// PHP Conditional statements

if ($present_time >= 00.00 && $present_time < 12.00) {
    echo "<h3> good morning, $my_name! </h3>";
}
elseif ($present_time >= 12.00 && $present_time < 4.59) {
    echo "<h3> good afternoon, $my_name! </h3>";
}
elseif ($present_time >= 16.00 && $present_time < 23.59) {
    echo "<h3> good nigth, $my_name! </h3>";
}

else {
   echo "<h3> Hello, $my_name! </h3>";
}

//swtich statement
//____________________
$today = date (format: "D");
echo "today is: $today <br>";


// function 18/11/2024

function greetMe() {
    echo "good afternoon";
}

greetMe();










?>

