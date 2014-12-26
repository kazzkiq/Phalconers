<?php

// Create the router
$router = new \Phalcon\Mvc\Router();

$router->add(
    "/what-is-phalcon",
    array(
        "controller" => "phalcon",
        "action"     => "index"
    )
);

$router->removeExtraSlashes(true);

return $router;