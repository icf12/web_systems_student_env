<?php

$r = Router::Instance();


$r->get("\/inter", array(
    'Controller' => "UserController",
    'Method' => "cont"
));
$r->get("\/data", array(
   'Controller' => "DataController",
    "Method" => "Index"
));
$r->post("\/inter", array(
    'Controller' => "UserController",
    "Method" => "cont"
));


