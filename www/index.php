<?php

include_once "include.php";
$includer = new AutoInclude();
$includer->autoinclude();

print "Hello World!";

$r = Router::Instance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);