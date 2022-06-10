<!-- Task 1 -->
<?php 

//[1]
# إستخدم ما تعلمته في المتغيرات لنستطيع تغيير جملة Elzero Courses بسهولة مستقبلا
$content = "Elzero Courses";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?=$content ?></title>
  </head>
  <body>
    <h1><?=$content ?></h1>
    <p>Here In <?=$content ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?=$content ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?=$content ?></footer>
  </body>
</html>
<!-- Task 2 -->
<?php
echo "<hr>"; 
//(2)
$name = "elzero";
$$name = "Web";
#############
# [1]
echo "1-".$$name."<br>";
echo "2-".$elzero."<br>";
echo "3-${elzero}<br>";
echo "4-${$name}<hr>";
?>

<!-- Task 3 -->
<?php 
$a = 200;
$b = &$a;
$a = 100;
echo $b . "<hr>"; 
?>

<!-- Task 4 -->
<?php
  echo '<pre>';
//   print_r($_SERVER);
  echo $_SERVER["DOCUMENT_ROOT"]."<br>";
  echo $_SERVER["SERVER_NAME"]."<br>";
  echo $_SERVER["SystemRoot"]."<br>";
  echo $_SERVER["OPENSSL_CONF"]."<br>";
  echo '</pre>';
  echo "<hr>";
  ?>

  <!-- Task 5 -->
  <?php
  /*
  1- break
  2-clone
  3-array()
  4-die()
  5-if
  6-foreach
  7-print
  8- require
  9- var
  10- echo
  */
  ?>

    <!-- Task 6 -->
    
    <?php
    echo __LINE__ . "<br>";
    echo __FILE__ . "<br>";
    echo __DIR__
    ?>