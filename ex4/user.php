<?php
session_start();

setcookie('login', time() + 365*24*3600, null, null, false, true);
setcookie('password', time() + 365*24*3600, null, null, false, true);


echo $_cookie['login'];
echo $_cookie['password'];
?>