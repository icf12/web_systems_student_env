<?php

include_once "application/core/route.php";
include_once "application/modules/Test/Test.php";

$r = Router::Instance();
$r->get('\/', "fd");
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
