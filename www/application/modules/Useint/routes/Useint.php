<?php

$r = Router::Instance();


$r->get("\/inter", array(
    'Controller' => "UserInterface",
    'Method' => "process"
));
$r->get("\/data", array(
   'Controller' => "DataController",
    "Method" => "Index"
));
$r->post("\/inter", array(
    'Controller' => "UserInterface",
    "Method" => "process"
));


