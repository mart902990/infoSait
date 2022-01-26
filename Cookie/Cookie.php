<?php
$name = 'TestCookie';
$value = ' cookie1';
// срок действия по истечению сессии
setcookie($name, $value);
// срок действия час
setcookie($name, $value, time()+3600);
// срок действия уже истек – удаляем cookie
//setcookie($name,'', time() - 3600); 