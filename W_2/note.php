<?php
  /*
  ============================================
  = Data Types
  = ----------
  = Type Juggling + Automatic Type Conversion
  ============================================
  */
  echo 1 + "2"; // 3
  echo '<br>';
  echo gettype(1 + "2"); // Integer
  echo '<br>';
  echo True; // 1
  echo '<br>';
  echo gettype(True); // Boolean
  echo '<br>';
  echo True + True; // 2
  echo '<br>';
  echo gettype(True + True); // Integer
  echo '<br>';
  echo 5 + '5 Lessons'; // 10 => Warning
  echo '<br>';
  echo gettype(5 + '5 Lessons'); // Integer => Warning
  echo '<br>';
  echo 10 + 15.5; // 25.5
  echo '<br>';
  echo gettype(10 + 15.5); // double => Float
  echo '<hr>';
########################################################
### 8 ###
########################################################
  /*
  ============================================
  = Data Types
  = ----------
  = Type Casting
  = ----------------------
  = "boolean" or "bool"
  = "integer" or "int"
  = "float" or "double" or "real"
  = "string"
  = "array"
  = "object"
  = "null"
  = ------
  = Search For Settype
  ============================================
  */
  echo 5 + (int) "5 Lessons";
  echo '<br>';
  echo 5 + (integer) "5 Lessons";
  echo '<br>';
  echo 5 + ( integer ) "5 Lessons";
  echo '<br>';
  echo gettype(5 + (int) "5 Lessons");
  echo '<br>';
  echo 10 + 15.5;
  echo '<br>';
  echo 10 + (int) 15.5;
  echo '<br>';
  echo gettype(10 + (int) 15.5);
  echo '<br>';
  echo 10.5 + 10.5;
  echo '<br>';
  echo gettype(10.5 + 10.5);
  echo '<br>';
  echo (int) 10.5 + (int) 10.5; // 20
  echo '<br>';
  echo gettype((int) 10.5 + (int) 10.5);
  echo '<br>';
  echo (int) (10.5 + 10.5); // 21
  echo '<hr>';
  ########################################################
  ### 9 ###
  ########################################################
    /*
  ============================================
  = Data Types
  = ----------
  = Boolean + Converting To Boolean
  ============================================
  */
  var_dump((bool)""); // false ==> اي حاجه فاضيه ب 
  echo '<br>';
  var_dump((bool)"عبدالرحمن"); // true ==> اي استرنج اكثر من حرف ب
  echo '<br>';
  var_dump((bool)array()); // false ==> اي حاجه فاضيه ب 
  echo '<br>';
  var_dump((bool)0); // false ==> اي حاجه 0 ب 
  echo '<br>';
  var_dump((bool)"0");// false ==> اي حاجه 0 ب 
  echo '<br>';
  var_dump((bool)100);// true ==> اي رقم صحيح سواء موجب او سالب ب 
  echo '<br>';
  var_dump((bool)array(1));// true ==> اي رقم جوا المصفوفة ب  
  echo '<br>';
  var_dump((bool)[1]);// true ==> اي رقم جوا المصفوفة ب  
  echo '<br>';
  var_dump((bool)-10.5);// true ==> اي رقم غير صحيح موجب او سالب  ب  
  echo '<hr>';
  ########################################################
  ### 10 ###
  ########################################################
    /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = nl2br() ==> new line two br <tag>
  ============================================
  */
  echo 'Hello PHP';
  echo '<br>';
  echo "Hello PHP";
  echo '<br>';
  echo "Hello 'PHP'";
  echo '<br>';
  echo 'Hello "PHP"';
  echo '<br>';
  echo 'Hello \'PHP\'';
  echo '<br>';
  echo "Hello \"PHP\"";
  echo '<br>';
  echo "Hello PHP\\";
  echo '<br>';
  echo 'Hello PHP
  On Multiple
  Lines'; // one line
  echo '<br>';
  echo nl2br('Hello PHP--
  On Multiple--
  Lines :)'); // mulitple lines
  echo '<hr>';
  ########################################################
  ### 11 ###
  ########################################################
  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = Heredoc
  = Nowdoc
  ============================================
  */
$name = "Abdo";

#Heredoc ==> بتعمل اسكيب للعلامات وبتعمل بارص للمتغيرات
echo <<<"Here"
Hello PHP
Special Characters $$$ ' ' ' """"" \\\\
Hello My Name Is $name
Here;
echo '<br>';
##################
#Nowdoc ==> بتعمل اسكيب للعلامات وللمتغيرات
echo <<<'Now'
Hello PHP
Special Characters $$$ ' ' ' """"" \\\\
Hello My Name Is $name
Now;
echo '<br>';
echo "<ul>";
echo "<li>" . $name ."</li>";
echo "<li>" . $name ."</li>";
echo "<li>" . $name ."</li>";
echo "<li>" . $name ."</li>";
echo "</ul>";
echo '<br>';
echo <<<"ullinks"
<ul>
<li> $name </li>
<li> $name </li>
<li> $name </li>
<li> $name </li>
</ul>
ullinks;
echo '<hr>';
  ########################################################
  ### 12 ###
  ########################################################
    /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = ------------------
  = print_r()
  ============================================
  */
  echo "<pre>";
  print_r([
      0=>"Yassmin", # index 0
      "A"=>"Ahmed", # key = A
      "B"=> "Baker", # key = B
      "Abdelrahman", # index = 1
      True => "Sayed", # true =1 .'. make overrride on abdelrahamn
      9=>"Youssef",
      "Mohamed",
      False => "Yara",
      "Names" => [
        "Osama",
        "Ahmed",
        "Sayed" => [
          "1",
          "2",
          "3"
        ]
      ] 
  ]);
  echo "</pre>";
  echo "<hr>";
?>
<html>
    <head>
        <style>
            hr{
                border-top: 5px dotted red;
                
            }
        </style>
    </head>
</html>