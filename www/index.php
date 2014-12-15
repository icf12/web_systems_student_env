<?php

include_once "application/core/route.php";
include_once "application/modules/Test/Test.php";
include_once "application/modules/Test/TestController.php";
include_once "application/modules/Test/data.php";
include_once "application/modules/Test/home.php";

$r = Router::Instance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);