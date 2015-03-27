<?php

$r = Router::Instance();


$r->get("\/login", array(
    'Controller' => "Authorization",
    'Method' => "process"
));
$r->get("\/data", array(
   'Controller' => "DataController",
    "Method" => "Index"
));
$r->post("\/login", array(
    'Controller' => "Authorization",
    "Method" => "process"
));

