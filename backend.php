<?php
declare(ticks=1);
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="gopaloaded.txt"');
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//header('Content-Type: application/pdf');
//header("HTTP/1.1 404 Not Found");
//var_dump($_SERVER);
//echo  ($_SERVER['SERVER_PROTOCOL']);
//header('Location: http://www.google.com/');
//$a = $_GET['a'];   
$a = $_POST ['a'];
echo ("$a \n");
echo "работает? AJAX \n";


var_dump($a);
// пример GET запроса
//$d = $_GET ['num1'];
//$f = $_GET ['num2'];
//echo $d + $f;
//пример POST 
/*
$d = $_POST ['num1'];
$f = $_POST ['num2'];
echo $d + $f;

*/