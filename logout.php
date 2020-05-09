<?php
session_start();
$_SESSION = array();
session_destroy();

header ("HTTP/1.1 302 Moved Temporatily"); 
header ("Location: "."./"); 
exit();

 
?>