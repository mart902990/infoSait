<?php
//$name = 'TestCookie';
//$value = ' cookie1';
// срок действия уже истек – удаляем cookie
setcookie('TestCookie','', time() - 3600); 