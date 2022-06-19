<!-- [1] Flow control in PHP -->
<?php
/*
like if/else , switch , while , for 
*/
?>
<!-- [2] PHP Goto -->
<?php
// goto operator allow to jump to another section in the program
/*
The goto instruction is a goto followed by the desired target label: goto MyLabel;.
The target of the jump is speciﬁed by a label followed by a colon: MyLabel:.
This example will print Hello World!:
*/
#you cannot jump out of a function or method. You also cannot jump into any loop or switch structure. 
goto myLabel;
echo 'This text will be skipped, because of the jump.';
myLabel:
echo 'Hello World!<hr>';

for($i=0;$i<5;$i++){
    if($i==2){
        goto end;
    }
    echo $i. " <br>";
}
end: // // output 0 1
echo "<hr>";
?>
<!-- [3] PHP Loop Performace -->
<?php
$myLargeArray = array(1,2,3,4,5,6,7);
// Faster ==>  because the count() function has not to be called in every iteration of the loop.
$count = count($myLargeArray);
for ($i = 0; $i < $count; $i++ ) {
    echo $myLargeArray[$i]."<br>";
}
echo "<hr>";

// Compare Perfomance of For + Foreach Loop
$units = array();
// An array of 100 units with random string values
for($i=0;$i<=100;$i++){
    $units[] = (string)rand(11111,99999);
}
    $startingTime = microtime(true);

    // for loop performance evaluation
    $size = count($units);
    for($i=0;$i<$size;$i++){}
        $endingTime = microtime(true);
        $forlooptime = $endingTime - $startingTime;
        $startingTime = microtime(true);
    echo "for loop evaluates to: "
. number_format($forlooptime * 1000, 6);
echo "<br>";

// foreach loop performance evaluation
foreach($units as $unit) { }
$endingTime = microtime(true);
$foreachlooptime = $endingTime - $startingTime;
echo "\nforeach loop evaluates to: "
    . number_format($foreachlooptime * 1000, 6);
?>
