<!-- loosely typed language  -->
<?php
#  loosely typed language
/*
1- we are NOT required to define the type of a variable while declaring it.
2- PHP are loosely typed language
3-  depend on the value of a variable
*/
#Ex:-
$var1;
$var1 = 1; //var1 variable is now integer.
$var1 = "Ali"; //var1 variable is now a string.
?>
<!-- --------------------------------------------------------- -->

<!-- PHP Predefined Constants -->
<?php
echo PHP_VERSION."<br>"; // 8.1.6;
echo PHP_MAJOR_VERSION."<br>"; // 8  ==> as integer
echo PHP_MINOR_VERSION ."<br>"; // 1
echo PHP_ZTS ."<br>"; //1
echo PHP_DEBUG ."<br>"; // 0
echo PHP_MAXPATHLEN ."<br>"; //2048 ==> The maximum length of filenames (including path) supported by this build of PHP.
echo PHP_OS ."<br>"; // WINNT ==> The operating system PHP was built for.
echo PHP_OS_FAMILY ."<br>"; // Windows
?> 
<!----------------------------------------------------------- -->
<!-- PHP Predefined Variables  -->
<?php
# Some  predefined variables in PHP are "superglobals"
# Means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
/*
$GLOBALS — References all variables available in global scope
$_SERVER — Server and execution environment information
$_REQUEST — HTTP Request variables
$_POST — HTTP POST variables
$_GET — HTTP GET variables
$_FILES — HTTP File Upload variables
$_ENV — Environment variables
$_COOKIE — HTTP Cookies
$_SESSION — Session variables
 */
?>