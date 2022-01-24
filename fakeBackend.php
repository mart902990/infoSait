<?php

declare(ticks=1);
$velu = 3333;
setcookie("TestCookie", $velu, time() +3000);
setcookie("Test", "gooooopa22");
session_start();
//header('Content-Type: text/plain');
//header('Content-Disposition: attachment; filename="gopaloaded.txt"');
//header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//header('Content-Type: application/pdf');
//header("HTTP/1.1 404 Not Found");
//var_dump($_SERVER);
//echo  ($_SERVER['SERVER_PROTOCOL']);
//header('Location: http://www.google.com/');
//$a = $_GET['a'];   
//$a = $_POST ['a'];
$a = $_POST ['num23'];
echo ("$a \n");
echo "работает? AJAX \n";
echo '<pre>';
print_r($_COOKIE);
echo '<pre>';
//внесемм изменение чтобы файл схавад git&&&&&