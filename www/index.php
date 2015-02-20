<?php
header('Content-type: text/html; charset = utf-8');
include_once "include.php";
$includer = new AutoInclude();
$includer->autoinclude();

print "Hello World!";


testFunction();

function testFunction(){
    $a1 = new Authorization();
    $a1->header("Авторизация");
    $a1->method("POST");
    $a1->action("/login");
    $a1->process();
}


$r = Router::Instance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);