<?php
# [Video 13]
  /*
    Variables
    - Naming Rules + Info
    [1] Start With Dollar Sign $
    [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
    [3] You Can Use Numbers Inside The Name
    [4] No Special Characters Allowed
    [5] Case Sensitive
    - Test Single And Double Quotes

    Search
    - Loosely Typed Language
  */

  # declare a varaible
  $username = "Ahmed";
  echo $username."<hr>";
  ##########################################

  # [Video 14] ==> Testing Variable In Real Life
  $username = "Abdelrahman";
  
  #########################################

  # [Video 15] 
    /*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */
  $a = "osama";
  $$a = "elzero";
  $$$a = "school";

  echo $a;
  echo "<br>";
  echo $$a; 
  echo "<br>";
  echo $osama;
  echo "<br>";
  echo $$$a;
  echo "<br>";
  echo $elzero;
  echo "<br>";

  echo "Hello ${$a}"; // $$a
  echo "<br>";
  echo "Hello ${$$a}<hr>"; // $$$a
  
  #########################################

  # [Video 16] 
    /*
    Assign Variable By Reference
    - By Default, Variables Are Always Assigned By Value
    - Assigned By Reference Make Variable Alias Or Point To Another

    Search
    - References Are Not Pointers
  */
  $a = "Abdo"; 
  $b = $a;
  $b = "Ibrahim";

  echo $a;
  echo '<br>';
  echo $b;
  echo '<br>===============================<br>';
#######################
  $a = "Abdo"; 
  $b = &$a;
  $b = "Ibrahim";

  echo $a;
  echo '<br>';
  echo $b;
  echo '<hr>';

  #########################################

  /*
  Pre-Defined Variables
  
  Search
    - PHP Pre-Defined Variables
  */
  // echo '<pre>';
  // print_r($_SERVER);
  // echo $_SERVER["HTTP_CONNECTION"];
  // echo '</pre>';
  
  echo $_POST["username"]."<hr>";
  #########################################

  # [Video 18] 
    /*
    Constants الثوابت
    - That Value Cannot Change During The Execution
    - Constants Always Uppercase
  */
  define("DB_NAME","Qndeel");
  echo DB_NAME."<br>";
  define("MAIN_NUMBER",5);
  echo MAIN_NUMBER ** 2 ."<hr>";
  #########################################

  # [Video 19] 
    /*
    Pre-Defined Constants [Case Sensitive]
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
    - __LINE__
    - __FILE__
    - __DIR__

    Reserved Keywords
    - break
    - clone

    Search
    - PHP Predefined Constants
    - Compile Time vs Runtime
    - List of Reserved Words
  */
  define("BREAKS", "AA");

  echo php_uname();
  echo '<br>';
  echo PHP_VERSION;
  echo '<br>';
  echo __LINE__;
  echo '<br>';
  echo __FILE__;
  echo '<br>';
  echo __dir__;
  echo '<br>';
  echo BREAKS;

  // No Problem Here
  function hello() {
    return "Hello";
  }

  echo hello()."<hr>";

  // Syntax Error => Reserved Word
//   function clone() {
//     return "Clone";
//   }

//   echo clone();
//   define('CLONE', 'AA');

  
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page |<?= $username?></title>
</head>

<body>
    <div>welcome <?= $username?></div>
    <div><?= $username?>, You Scored 1000 points</div>
    <!-- Video 17 -->
    <form action="" method="post">
        <input type="text" name="username">
        <input type="submit" value="Send">
    </form>
</body>

</html>