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

$router->add(
    "/auth/try-login",
    array(
        "controller" => "auth",
        "action"     => "login"
    )
);

$router->add(
    "/logout",
    array(
        "controller" => "auth",
        "action"     => "logout"
    )
);

$router->removeExtraSlashes(true);

return $router;