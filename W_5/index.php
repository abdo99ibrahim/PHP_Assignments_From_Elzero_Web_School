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
echo "<hr>";
?>

<?php
##########################
##### [37-42] Task 1 #####
##########################
$index = 10;
while($index>=1){
    echo "$index <br>";
    $index --;
}
echo "<hr>";
?>


<?php
##########################
##### [37-42] Task 2 #####
##########################
$index = 0;
// USING FOR LOOP
for(;$index<=20;$index+=2){
    if($index == 0){
        continue;
    }
    else{
        echo "$index <br>";
    }
}
echo "<hr>";
// USING WHILE LOOP
$index = 0;
while($index < 20){
    $index += 2;
    if($index === 0){
        continue;
    }
    else{
        echo "$index <br>";
    }
}
echo "<hr>";
// USING DO-WHILE LOOP
$index = 0;
do{
    $index += 2;
    if($index === 0){
        continue;
    }
    else{
        echo "$index <br>";
    } 
}while($index < 20);
echo "<hr>";
?>

<?php
##########################
##### [37-42] Task 3 #####
##########################
$num = 2;
while ($num < 520) {
  if($num == 2){
    $num =1;
  }
  echo "$num <br>";
  $num = ($num +1)*2;
  /*
  1
  (1 + 1) * 2 = 4
  (4 + 1) * 2 = 10
  (10 + 1) * 2 = 22
  (22 + 1) * 2 = 46
  (46 + 1) * 2 = 94
  (94 + 1) * 2 = 190
  (190 + 1) * 2 = 382
  (382 + 1) * 2 = 766 ==> X 
  */
}
echo "<hr>";
?>

<?php
##########################
##### [37-42] Task 4 #####
##########################
$start = 10;
$end = 0;
$stop = 3;
for($i=$start;$i >= $stop;$i--):
    if($i == $start){
        echo "$i <br>";
    }
    else{
        echo "$end$i <br>";

    }
endfor;    
echo "<hr>";
?>

<?php
##########################
##### [37-42] Task 5 #####
##########################
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for($i = $start;$i<count($mix);$i++){
    if($mix[$i] == $mix[$start] OR (gettype($mix[$i]) !== (gettype($start)))){
        continue;
    }
    else{
        echo "$mix[$i] <br>";
    }
}
echo "<hr>";
?>


<?php
##########################
##### [37-42] Task 6 #####
##########################
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach($money as $name=>$pound){
    echo "The Name Is $name And I Need $pound Pound From Him <br>";
}
echo "<hr>";
?>

<?php
##########################
##### [37-42] Task 7 #####
##########################
$mix = [1, 2, "A", "B", "C", 3, 4];
$countInteger = 0;
$countString = 0;
foreach($mix as $item){
    if(gettype($item) == "integer"){
        $countInteger++;
        echo "$item <br>";
    }
    if(gettype($item)=="string"){
        $countString++;
    }
}
echo "$countInteger Numbers Printed <br>";
echo "$countString Letters Ignored";
echo "<hr>";
?>

<?php
##########################
##### [37-42] Task 8 #####
##########################
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach($nums as $even){
    if($even % 2 == 0){
        echo $even / 2 ."<br>";
    }
    else{
        continue;
    }
}
echo "<hr>";
?>

<?php
##########################
##### [37-42] Task 9 #####
##########################
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for($i=$help_num;$i<count($names);$i++){
echo $names[$nums[$i]]."<br>";
}
echo "<hr>";
?>
<?php
##########################
##### [37-42] Task 10 #####
##########################
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
foreach($nums as $key=>$value){
    echo $value." + " . $nums[$help_num - $key] ." = ".$value + $nums[$help_num - $key] . "<br>";
}
?>