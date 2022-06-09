<?php
## Task 1 ##
echo "<pre>";
echo (int)15.2 + (int)14.7 + (10.5 + 10.5)."<br>"; // 50
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))); // Integer
echo "</pre>";
echo "<hr>";
######################################################
## Task 2 ##
//100 المطلوب إستخدام طريقتين لطباعة نوع البيانات
# [1]
echo "<pre>";
print_r(gettype( 100));
echo"<br>";
# [2]
var_dump(100);
# [3]
echo get_debug_type(100);
echo "</pre>";
echo "<hr>";
######################################################
## Task 3 ##
echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';

echo "<hr>";
######################################################
## Task 4 ##
// قم بالتعديل على السطر لجعل كل كلمة تظهر في سطر منفصلة عند الطباعة
# [1]
echo "<pre>";
echo "We \n Love \n Elzero \n Web \n School";
echo "</pre>";
// OR
# [2]
echo nl2br("We \n Love \n Elzero \n Web \n School");

echo "<hr>";
######################################################
## Task 5 ##
echo nl2br(<<<'nowdoc'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"

nowdoc);

echo "<hr>";
######################################################
## Task 6 ##
$something = "Programming";
echo <<<code
Hello \PHP\
We Love $something
code;

echo "<hr>";
######################################################
## Task 7 ##
echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");

echo "<hr>";
######################################################
## Task 8 ##
echo "<pre>";
print_r([
    'FrontEnd' => [
        'HTML',
        'CSS',
        'JS' =>[
            'vuejs'=>[
            2=> 'v2',
            'v3',
            ],
            'Reactjs',
            'Svelte'
        ],
    ],
    'BackEnd'=>[
        'PHP',
        'MySQL',
        'Security'
    ],
     'Git',
     'Github',
     'Testing' => [
         'Unit Testing',
         'End To End',
         'Integration'
     ] 
    ]);
echo "</pre>";

?>

