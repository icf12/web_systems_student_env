<?php
header('Content-type: text/html; charset = utf-8');
include_once "include.php";
$includer = new AutoInclude();
$includer->autoinclude();

$r = Router::Instance();
echo $r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);