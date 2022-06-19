<!-- [43] Function Introduction And DRY Concept -->
<?php
  /*
    Function
    - Introduction And DRY Concept ==> Don't Repaet Your Self
    - Parameter
    - Argument
  */
  function say_hello_to($person){
    echo "Hello Mr $person";
  }
  say_hello_to("Abdo");
  echo "<hr>";
?>

<!-- [44] Advanced Examples With Parameters And Arguments -->
<?php
  /*
    Function
    - Advanced Examples With Parameters And Arguments
    - Real Life Example
  */
  function say_hello($one,$two){
    echo "Hello Mr $one";
  }
  say_hello("Ahmed","Sayed");
echo "<hr>";
  function deep_freezer($item) {
    switch ($item){
        case "Water":
            echo "Make Ice <br>";
            break;
        case "Coca Cola":
            echo "Make It Cold <br>";
            break;
        case "Fruits":
            echo "Make It Fresh <br>";
            break;
        default:
            echo "Unknown Item <br>";
            break;
    }
  }
  deep_freezer("Water");
  deep_freezer("Coca Cola");
  deep_freezer("Fruits");
  deep_freezer("Vegetables");
  echo "<hr>";
?>

<!-- [45] Function Return vs Echo -->
<?php
  /*
    Function
    - Optional Return &#038; Null
    - End After Return
  */
  $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];
  function getNumber($numOne , $numTwo){
    return $numOne + $numTwo;
  }
//   getNumber(2,1); // 3
//   echo "<br>";
//   echo $prizes[3];
//   echo "<br>";
//   $prizeNumber = getNumber(2,3);
//   echo "<br>";
//   var_dump($prizeNumber);

  $prizeNumber = getNumber(2,3);
  echo "<br>";
  var_dump($prizeNumber);
  echo "<hr>";
?>

<!-- [46] Function Default Parameter Value -->
<?php
  /*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */
  function get_data($country="Qatar",$name="mohamed",$age=23,$address="alex"){
    $line_one = "Your Country Is $country And Your Name Is $name <br>";
    $line_two = "Your Age Is $age And You Live In $address";
    return $line_one . $line_two;
  }
  echo get_data("Egypt","Abdo",23,"80 شارع العبداني")."<br>";
  echo "===================================================== <br>";
  echo get_data();
  echo "<hr>";
  ?>

  <!-- [47] Function Variable Arguments List-->
<?php
  /*
    Function
    - Variable Arguments List
    --- func_num_args() ==> return numbers of arguments
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax In JS
  */
  function calculate(...$nums){
    // echo "Number of Arguments ". func_num_args()."<br>";
    // echo "Argument Index Number  ". func_get_arg(3)."<br>";
    // echo "<pre>";
    // print_r(func_get_args());
    // echo "</pre>";

    // $result = 0;
    // foreach(func_get_args() as $arg){
    //    $result += $arg; 
    // }
    // echo "The Sum Of the argument arrays " . $result. "<br>";

      print_r($nums);
      echo "<br>";
      $result = 0;
      foreach ($nums as $num) :
        $result += $num;
      endforeach;
      echo "The Sum Of the argument arrays " . $result. "<br>";
  }
  calculate(10,23,56,32);
  echo "<hr>";
  ?>

    <!-- [48] Function Training And Unpacking Arguments-->
<?php
  /*
    Function
    - Function Advanced Training
    -- Unpacking In Arguments

    Search
    - PHP Variadic Functions
    - Splat Operator [...$skills]
  */
  $group_of_skills = ["HTML", "CSS", "JS", "PHP"];
  function getData($name, $country = "Private",...$skills){
echo "Hello $name Your Country IS $country";
foreach($skills as $skill){
    echo "--$skill <br>";
}
  }
//   getData("Abdelrahman","Egypt",...$group_of_skills);
  getData("Abdelrahman","Egypt",...["HTML", "CSS", "JS", "PHP"]);
  echo "<hr>";
?>

<!-- [49] Variable Function And Function Exists -->
<?php
  /*
    Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
    - Function Exists ==> check if called function exist or not
    --- function_exists("Func Name")
  */
  function one(){
    return "One From Function <br>";
  }
//   echo one();

$func1 = "one";
echo $func1();

function sayHelloTo($someone){
    return "Hello $someone <br>";
  }

  $func2 = "sayHelloTo";
  echo $func2("Ali");

  function testing() {
    return "Testing From Function <br>";
  }
  if(function_exists("testing")){
    echo testing();
  }
  else{
    echo "Function Not Found";
  }
  echo strlen("Abdo"); // 4
  echo "<br>";
  $func3 = "strlen";
  echo $func3("ali");
  echo "<hr>";
?>

<!-- [50] Passing Arguments By Reference -->
<?php
  /*
    Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
    --- To Change It Outside Pass The Argument By Reference

    - Return Type Declarations

    Search
    - PHP Strict Mode
  */

#Passed By Value
function addFive_Val($num){
  $num +=5;
  return $num;
}
$n = 15;
echo addFive_Val($n)."<br>";

#Passed By Value
echo $n . "<br> ################################# <br>"; //15
#############################
#Passed By Refernce
function addFive_Ref(&$num){
    $num +=5;
    return $num;
}
$n = 15;
echo addFive_Ref($n)."<br>";

#Passed By Refernce
echo $n. "<br> ################################# <br>"; //20

#############################
function calculateNum($n1,$n2) :int{
    return $n1 + $n2;
}
echo calculateNum(10,9.5);
echo "<br>";
echo gettype(calculateNum(10,9.5)); // Integer
echo "<hr>";
?>

<!-- [51] Passing Arguments By Reference -->
<?php
/*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
  */
   // Anonymous Function In Variable
   $sayThinks = function(){
       return "Thinks";
    };
    echo $sayThinks();
    echo '<br>#########<br>';
    // Anonymous Function With Parameter In Variable
    $say_thinks = function($someone){
        return "Thinks $someone";
     };
     echo $say_thinks("Abdo");
     echo '<br>#########<br>';

    // Inherit Variable From Parent Scope
    $msg = "Hi";
    $say_hi = function($someone) use($msg){
        return "$msg $someone";
     };
     echo $say_hi("Abdo");
     echo '<br>#########<br>';
  // Pass Anonymous Function To Function => array_map
  $nums = [1,23,56,32,76,34,98,223];
  function add_four($item){
    return $item + 4;
  }
  $number_after_add_four = array_map("add_four",$nums);
  echo "<pre>";
  print_r($number_after_add_four);
  echo "</pre>";

# USing Anonymous Function 
$number_after_add_nine  = array_map(fn($item)
   => $item +=9
,$nums);
echo "<pre>";
print_r($number_after_add_nine);
echo "</pre>";
echo "<hr>";
?>

<!-- [52] Arrow Function -->
<?php
  /*
    Function
    - Arrow Function
    --- Short Syntax For Anonymous Function
    --- Automatic Use Variables From Parent Scope

    - Syntax
    --- Function Replaces With fn
    --- No Need For Curly Braces
    --- Return Is Omitted
  */

  // Arrow Function In Variable
?>