<?php
header('Content-type: text/html; charset = utf-8');
include_once "include.php";
$includer = new AutoInclude();
$includer->autoinclude();

print "Hello World!";


testFunction();

function testFunction(){
    $t1 = new TextField('Введите логин','login');
    echo $t1->render();
}


$r = Router::Instance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);