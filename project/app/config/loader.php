<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir
    )
);


/**
 * Registering classes from library
 */
$loader->registerClasses(
    array(
        "Bcrypt" => "../app/library/classes/class.Bcrypt.php",
        "ChromePhp" => "../app/library/classes/class.ChromePhp.php"
    )
);

$loader->register();
