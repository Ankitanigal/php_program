<?php
$cookie_name = "user";
$cookie_value= "welcome";
setcookie($cookie_name,$cookie_value,time() + (86400 * 30),"/");
?>