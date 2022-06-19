<!--     
    Search
    [1] PHP Variadic Functions
 -->
 <?php
 # Variadic Functions
 //  accept a variable number of arguments.


//  function sum(int $x, int $y){
//     return $x + $y;
//  }
//  echo sum(10,15); // 25

 // Now see the variadic function example in PHP. Allowing the sum() function to accept a variable of arguments.

 // you need to use func_get_args() function. The func_num_args() built-in function returns an array that contains all function arguments. For example:

 function sum(){
    $numbers = func_get_args();
    $total = 0;
    $count = count($numbers);
    for($i=0;$i<$count;$i++){
        $total+=$numbers[$i];
    }
    return $total;
 }
 echo sum(10, 20) . '
'; // 30
echo sum(10, 20, 30) . '
'; // 60
echo "<hr>";
 ?>

 <!-- Strict Mode -->
 <?php
// declare(strict_types=1);
/*
1- Use the PHP strict_types directive to enable strict typing or strict mode.
2- In strict mode, PHP accepts only values corresponding to the type declarations and issue a TypeError exception if there’s a mismatch.
When you include code from another file, PHP uses the mode of the caller.
*/
 ?>


 <!-- Closure -->
 <?php
# used to represent anonymous functions.

$anony = function () {
    return 'lambda';
   };
//Closure
echo get_class($anony);
echo "<br>";
//object
echo gettype($anony);
echo "<br>";
?>