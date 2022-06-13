<?php
  /*
  ########################
  ###### [Video 20] ######
  ########################
    Operators
    - Used To Perform Operations On Values.

    Arithmetic Operators
    - Used To Do Arithmetical Operations &#038; Conversion

    - $a [+]  $b => Addition
    - $a [-]  $b => Subtraction
    - $a [*]  $b => Multiplication
    - $a [/]  $b => Division
    - $a [%]  $b => Modulus
    - $a [**] $b => Exponentiation
    - +$a        => Identity
    - -$a        => Negation
  */
  echo "<pre>";
  echo "100";
  echo '<br>';
  echo gettype("100");
  echo '<br>';
  echo +"100";
  echo '<br>';
  echo gettype(+"100");
  echo '<br>';

  echo "-100";
  echo '<br>';
  echo gettype("-100");
  echo '<br>';
  echo -"-100";
  echo '<br>';
  echo gettype(-"-100");
  echo "</pre>";
  ############################################################

  ########################
  ###### [Video 21] ######
  ########################
    /*
    Operators
    - Used To Perform Operations On Values.

    Assignment Operators
    - Used To Write Value To Another

    - $a [+=]  $b => Addition
    - $a [-=]  $b => Subtraction
    - $a [*=]  $b => Multiplication
    - $a [/=]  $b => Division
    - $a [%=]  $b => Modulus
    - $a [**=] $b => Exponentiation
  */
  ############################################################

  ########################
  ###### [Video 22] ######
  ########################
    /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 1
    - ==    => Equal بقارن من ناحية القيمة فقط وليس النوع
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical بقارن من ناحية القيمة فقط والنوع
    - !==   => Not Identical
  */
  
  
  ############################################################
  ########################
  ###### [Video 23] ######
  ########################
    /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 2
    - >     => Larger Than
    - >=    => Larger Than Or Equal
    - <     => Smaller Than
    - <=    => Smaller Than Or Equal
    - <=>   => Spaceship [Less Than, Equal Or Greater]
    ==> less than return -1
    ==> Equal return 0
    ==> Greater than return 1

    Search
    - How Does PHP Compare Strings With Comparison Operators
  */
  var_dump(100>50);
  echo '<br>';
  var_dump(100<50);
  echo '<br>';  


  # - <=>   => Spaceship [Less Than, Equal Or Greater]
  var_dump(100<=>50); # 100 > 50 ==> Greater = 1
  echo '<br>';
  var_dump(100<=>200); # 100 < 200 ==> Less Than  = -1
  echo '<br>';
  var_dump(100<=>100); # 100 = 100 ==> Equal  = 0
  echo '<hr>';


 ############################################################
 ########################
 ###### [Video 24] ######
 ########################
   /*
    Operators
    - Used To Perform Operations On Values.

    Incrementing &#038; Decrementing Operators
    - Increase And Decrease Values
  */

  //POSTNCREMENT
  $a = 0;
  echo $a++; // 0
  echo '<br>';
  echo $a; // 1
  echo '<br>';

  //PREINCREMENT
  $b = 0;
  print ++$b; //1
  echo '<br>';
  print $b;  // 1
  echo '<hr>';

  
 ############################################################
 ########################
 ###### [Video 25] ######
 ########################
   /*
    Operators
    - Used To Perform Operations On Values.

    Logical Operators
    - Compare Conditions

    and => And => Two Are True
    &&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
    or  => Or  => One Or Both Is True
    ||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    xor => Xor => One Is True But Not Both
    متشابهين ب 0 ومخلفين ب 1
    !   => Not => Not True
  */
  var_dump(100>50 and 100>80 and 100 > 90); // true
  echo '<br>';
  var_dump(100>50 and 100>80 and 100 > 100); // False
  echo '<br>';
  var_dump(100>50 && 100>80 && 100 > 90); // true
  echo '<br>';
  var_dump(100>50 xor 100>80); // flase
  echo '<hr>';


 ############################################################
 ########################
 ###### [Video 26] ######
 ########################
   /*
    Operators
    - Used To Perform Operations On Values.

    String Operators
    - Concatenate Strings

    .
    .=
  */
  // Constant
  define('ELZERO', '1');
  
  $a = "Elzero";
  $b = "Web";
  $c = "School";
  echo $a ." ".$b." ".$c." ".ELZERO."<br>";
  #####################################
  $x = "Elzero ";
  $x .= "web ";
  $x .= "school";
  echo $x."<hr>";


 ############################################################
 ########################
 ###### [Video 27] ######
 ########################
   /*
    Operators
    - Used To Perform Operations On Values.

    Array Operators
    - Deal With Arrays

    +     => Union
    ==    => Equal => Same Key And Value
    !=    => Not Equal
    <>    => Not Equal
    ===   => Identical => Same Key And Value, Same Order, Same Type
    !==   => Not Identical
  */
  $arr1 = [1 => "A", 2 => "B"];
  $arr2 = [3 => "C", 4 => "D"];
  $arr3 = $arr1 + $arr2;
  echo '<pre>';
//   print_r($arr1 + $arr2);
  print_r($arr3);
  echo '</pre>';

  $arr4 = [1 => "10", 2 => "20"];
  $arr5 = [2 => 20, 1 => 10];
  var_dump($arr4 == $arr5); // true
  echo '<br>';
  var_dump($arr4 != $arr5); // false
  echo '<br>';
  var_dump($arr4 <> $arr5); // false
  echo '<br>';
  $arr6 = [1 => 100, 2 => 200];
  $arr7 = [1 => 100, 2 => 200];
  var_dump($arr6 === $arr7); // true
  echo '<hr>';
############################################################
########################
###### [Video 28] ######
########################
  /*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */
  $err1 = 10;
  $err2 = @$err1 or die("Variable Not Found");
  echo $err2;
    // File
    // $f = @file("osama.txt") or die("File Not Found");
    // echo '<pre>';
    // print_r($f);
    // echo '</pre>';
    echo '<hr>';
  
    // Include
    // (@include("osama_elzero.php")) or die("Include File Not Found");

############################################################
########################
###### [Video 29] ######
########################   
  /*
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&#038;&#038;" Has A Greater Precedence Than "and"
  */

?>