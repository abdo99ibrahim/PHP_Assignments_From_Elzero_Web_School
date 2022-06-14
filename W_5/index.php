<?php
// Assigments [31 - 36]
##########################
##### [31-36] Task 1 #####
##########################
/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
$a = 100;
$b = 200;
$c = 100;
echo $b > $a && $a===$c && $a+$c === $b ?"Yes":"No";
echo "<hr>";

##########################
##### [31-36] Task 2 #####
##########################
// Test Case 1
$a = 100;
$b = 200;
$c = 300;
if($a >$b){
    echo "A Is Larger Than B";
}
elseif($a >$c){
    echo "A Is Larger Than c";
}
else{
    echo "A Is Not Larger Than B Or C";
}
echo "<br>";

// Test Case 2
$a = 200;
$b = 100;
$c = 300;
if($a >$b):
    echo "A Is Larger Than B";
elseif($a >$c):
    echo "A Is Larger Than c";
else:
    echo "A Is Not Larger Than B Or C";
endif;
echo "<br>";

// Test Case 3
$a = 200;
$b = 200;
$c = 100;
if($a >$b):
    echo "A Is Larger Than B";
elseif($a >$c):
    echo "A Is Larger Than c";
else:
    echo "A Is Not Larger Than B Or C";
endif;
echo "<hr>";
?>

<html>

<body>
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
    <?php 
    ##########################
    ##### [31-36] Task 3 #####
    ##########################
    $admins = ["Osama", "Ahmed", "Sayed"];
    if($_SERVER["REQUEST_METHOD"]==="POST"){
     foreach($admins as $admin){
            if($_POST['user'] == $admin){
                echo "The Request Method Is Post And Username Is $admin";
                echo "<br>";
                echo "This Username $admin Is Admin";
            }
        }
}
    ?>
    <hr>
</body>
</html>

<?php
##########################
##### [31-36] Task 4 #####
##########################
$a = 30;
$b = 20;
$c = 10;
if ($a + $b === $c) {

    echo "A + B = C";
  
  } elseif ($a + $c === $b) {
  
    echo "A + C = B";
  
  } elseif ($b + $c === $a) {
  
    echo "B + C = A";
  
  } else {
  
    echo "The End";
  
  }
  echo "<br>";
$result = ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End"));
echo $result;
echo "<hr>";
?>
<?php
##########################
##### [31-36] Task 5 #####
##########################
$name = "Osama";
$age = 40;
$country = "Egypt";
$result = ($age > 18 && gettype($name) === "string" && $country === "Egypt") ? "The Age Is Good To Go<br>"."The Name Is Good To Go<br>"."The Country Is Good To Go<br>" : "";
echo $result."<hr>";
?>

<?php
##########################
##### [31-36] Task 6 #####
##########################
$genre = "Hack And Slash";
switch ($genre){
    case($genre === "RPG"):
        echo "I Recommend Ys Games";
        break;
    case($genre === "Hack And Slash"):
        echo "I Recommend Castlevania Games";
        break;
    case($genre === "FPS"):
        echo "I Recommend Uncharted Games";
        break;
    case($genre === "Platform"):
        echo "I Recommend Megaman Games";
        break;
    case($genre === "Puzzle"):
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
echo "<hr>";
?>

<?php
##########################
##### [31-36] Task 7 #####
##########################
$num_one = 23;
$num_two = 5;
$op = "/";
/*
1- لديك متغيريين يحتوا على رقمين ومتغير يخص العلامة الحسابية
العلامة الحسابية يمكن أن تكون واحدة من أربعة -2+ – * /
قم بعمل شروط تقوم بالعملية الحسابية على الرقمين بناء على العملية المكتوبة-3
إذا قمت بكتابة علامة حسابية غير الأربعة الموجودين تظهر لك رسالة كما في-4 الأمثلة
5-إذا كانت العلامة الحسابية هي القسمة قم بطباعة الرقم بدون كسور في السطر الأول وفي السطر الثاني باقي القسمة
شاهد كل Test Case والنتيجة الخاصة بها
*/

// + Operator
if($op == '+'){
    echo $num_one + $num_two;
}elseif ($op == '-'){
    if($num_one >$num_two){
        echo $num_one - $num_two;
    }else{
        echo $num_two - $num_one;
    }
}elseif($op == '*'){
    echo $num_two * $num_one;
}elseif($op == '/'){
    echo (int)($num_one / $num_two) . "<br>";
    echo $num_one % $num_two;
}else{
    echo "Unknown Operation";
}
echo "<hr>";
?>

<?php
##########################
##### [31-36] Task 8 #####
##########################
$day = "Sat";
if($day == "Sat" || $day == "Sun" || $day == "Mon"){
    echo "We Are Open All The Day";
}
elseif($day == "Tue" || $day == "Wed"){
    echo "We Are Open From 08:12";
}
elseif($day == "Thu" || $day == "Fri"){
    echo "We Are Closed";
}else{
    echo "Unknown Day";
}
?>