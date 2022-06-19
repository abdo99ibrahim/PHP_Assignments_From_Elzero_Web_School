<?php
declare(strict_types=1);
######################
##/*** Task 1   ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>1</span></h1>";
function sayHelloTo($person, $gender="private"){
    if($gender == "Male"){
        return "Hello Mr $person";
    }
    elseif($gender == "Female"){
        return "Hello Miss $person";
    }
    else{
        return "Hello $person";
    }
}
echo sayHelloTo("Osama", "Male"); // Hello Mr Osama
echo "<br>";
echo sayHelloTo("Eman", "Female"); // Hello Miss Eman
echo "<br>";
echo sayHelloTo("Sameh"); // Hello Sameh
echo "<hr>";


######################
##/*** Task 2   ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>2</span></h1>";
# Method [1]
function get_arguments(...$all){
    foreach($all as $string){
        echo "$string ";
    }
}
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo "<br>";
echo get_arguments("I", "Love", "PHP"); // I Love PHP
echo "<br> ########################################### <br>";
# Method [2]
function getArguments(){
    $string = func_get_args();
    $count = count($string);
    for($i=0;$i<$count;$i++){
        echo "$string[$i] ";
    }
 }
 echo getArguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
 echo "<br>";
echo getArguments("I", "Love", "PHP"); // I Love PHP
echo "<hr>";


######################
##/*** Task 3   ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>3</span></h1>";
function sum_all(){
    $numbers = func_get_args();
    $total = 0;
    $count = count($numbers);
    for($i=0;$i<$count;$i++){
        if($numbers[$i]==5){
            continue;
        }
        elseif($numbers[$i]==10){
            $numbers[$i] +=10;
        }
        $total+=$numbers[$i];
    }
    return $total;
 }
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo "<br>";
echo sum_all(5, 10, 5, 10); // 40
echo "<hr>";

######################
##/*** Task 4   ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>4</span></h1>";
function multiply(...$nums){
    $count = count($nums);
    for($i=0;$i<$count;$i++){
        if(gettype($nums[$i]) == 'string'){
            continue;
        }
        elseif(gettype($nums[$i]) == 'double' || gettype($nums[$i]) == 'float'){
           $nums[$i] = intval($nums[$i]);
        }

        return $nums[$i] *= $nums[$i+1];
    }
}
echo multiply(10, 20) . "<br>"; // 200
echo multiply("A", 10, 30) . "<br>"; // 300
echo multiply(10.5, 100, "B"); // 1000
echo "<hr>";

######################
##/*** Task 5   ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>5</span></h1>";
function check_status($a, $b, $c) {
    gettype($a)=="string" ? $str = $a :(gettype($a)=="integer" ? $num = $a : $bol = $a);
    
    gettype($b)=="string" ? $str = $b :(gettype($b)=="integer" ? $num = $b : $bol = $b);

    gettype($c)=="string" ? $str = $c :(gettype($c)=="integer" ? $num = $c : $bol = $c);
    $bol === false ? $bol = "Are Not" : $bol = "Are";
    echo "Hello $str, Your Age Is $num, You $bol Available For Hire";

  }
  check_status("Osama", 38, false); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo "<hr>";

######################
##/*** Task 6   ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>6</span></h1>";
function calculate($num1,$num2,$operation="add"){
    if($operation == "add" || $operation == "a"){
        return $num1 + $num2;
    }elseif($operation == "subtract" || $operation == "s"){
        return $num1 - $num2;
    }elseif($operation == "multiply" || $operation == "m"){
        return $num1 * $num2;
    }else{
       echo "Not Found Operation";
    }
}
echo calculate(10, 20); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200
echo "<br>";
echo calculate(10, 20, "w"); // Not Found Operation

echo "<hr>";

######################
##/*** Task 7   ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>7</span></h1>";

function calculate_2(int $num_one, int $num_two) {
    if(gettype($num_one)=="integer"){
       settype($num_one,"double");
    }
    elseif(gettype($num_two)=="integer"){
        settype($num_two,"double");
    }
    return $num_one + $num_two;
  }
echo calculate_2(20, 10); // 30
echo "<br>";
echo gettype(calculate_2(20, 10)); // Double
echo "<hr>";

######################
##/*** Task 8  ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>8</span></h1>";

$message = "Hello";
$Hello = function($name) use($message){
    return "$message $name";
 };
 echo $Hello("Osama");
 echo "<hr>";

######################
##/*** Task 9  ***/##
######################
echo "<h1 style='color:red'>Task <span style='background:#333;color:#fff;padding:2px 10px;border-radius:20%;'>9</span></h1>";

$greet = fn($name) =>  "Greetings $name";
echo $greet("Osama"); // Greetings
?>
