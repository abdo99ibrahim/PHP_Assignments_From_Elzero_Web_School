<?php
/////// [Task 1] ///////
echo "<pre>";
echo 10 * 20 - 15 % 3 - 190 - 10 % 400 ."<br>"; // 0
echo 10 / 20 % 15 + 3 * 190 % 10 * 400 ."<br>"; // 0
echo 10 % 20 % 15 % 3 * 190 % 10 / 400;
echo "</pre>";
echo "<hr>";

/////// [Task 2] ///////
$a = "10";
// (1)
echo +$a."<br>";
echo gettype(+$a)."<br>";
// (2)
echo (int)$a."<br>";
echo gettype(+$a)."<br>";
// (3)
echo intval($a)."<br>";
echo gettype(+$a)."<br>";
// (4)
echo intval($a)."<br>";
echo gettype(+$a)."<br>";
// (5)
// settype($a,"integer");
// echo $a ."<br>";
// echo gettype(+$a)."<br>";
// (6)
echo $a ** 1 ."<br>";
echo gettype($a ** 1)."<br>";
// (7)
echo $a * 1 ."<br>";
echo gettype($a * 1)."<hr>";





/////// [Task 3] ///////
$a = 10;
$b = 20;
//Spaceship
echo $a <=> $b;
echo "<hr>";



/////// [Task 4] ///////
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <> $b); // True
var_dump($a != $b); // True
var_dump($a !== $c); // True
var_dump($a <= $c); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True
echo "<hr>";


/////// [Task 5] ///////
$points = 10;

$points ++;
$points ++;
$points ++;
echo $points . "<br>"; // 13

--$points;
--$points;
--$points;
--$points;
--$points;
echo $points . "<hr>"; // 8;


/////// [Task 6] ///////
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = $a." ".$b." ".$c ;

// Method Two
 $d = "$a $b $c";

// Method Three
$d = "{$a} {$b} {$c}";

// Method Four
// sprintf(format,arg1,arg2,arg++) ==> Replace the percent (%) sign by a variable passed as an argument.
$d = sprintf("%s %s %s",$a,$b,$c);

echo $d; // Elzero Web School
echo "<hr>";

/////// [Task 7] ///////
$a = 10;
$b = 20;

echo ((($a + $b) * ($a + $b)) + ($a * $a)) * $a; // 10000
//   10   20   10   20    10   10   10
echo "<hr>";



/////// [Task 8] ///////
// Code 1
// $a8 = $b8;
// @$b8 or die("Custom Error");
// echo $b8;
// echo "<br>";

//Code 2
$f = @file("Not_A_File") or die("Custom Error");
    echo '<pre>';
    print_r($f);
    echo '</pre>';

// Code 3
(@include("Not_A_File") or die("Custom Error"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignments</title>
</head>
</html>