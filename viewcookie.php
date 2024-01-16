<?php
echo "cookie value :".$_COOKIE["USER"];
SETCOOKIE("user",time() - (86400 * 30),"/");
?>