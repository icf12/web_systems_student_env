<?php

$r = Router::Instance();


$r->get("\/test", array(
    'Controller' => "TestController",
    'Method' => "Index"
));
$r->get("\/data", array(
   'Controller' => "DataController",
    "Method" => "Index"
));
$r->post("\/data", array(
    'Controller' => "TestController",
    "Method" => "IndexPOST"
));
