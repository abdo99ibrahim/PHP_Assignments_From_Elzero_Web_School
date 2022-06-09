<?php 
# PHP Resource Data Type
/*
 --> For example, when we attempt to access the database or a file resource, we can have a resource identifier. This identifier will be used to hook the resource to access data.


 $conn = mysqli_connect(localhost,"root","admin","animals");
 ::==> database information is specified for the mysqli_connect() and it returns MySQL connection object as a resource identifier.

 $fp = fopen("index.php",'r');
 ::==> used to create a file resource object reference.
*/
?>
<?php 
#unset() destroys the specified variables.
/*
// destroy a single variable
unset($foo);
-----------
// destroy a single element of an array
unset($bar['quux']);
-----------
// destroy more than one variable
unset($foo1, $foo2, $foo3);
*/
$name = 'Felipe';
// var_dump((unset) $name);
var_dump($name);
?>