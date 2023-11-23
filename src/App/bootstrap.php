<?php

declare(strict_types=1);

// load App from the framework directory
require __DIR__ . "/../../vendor/autoload.php";

// load the framework namespace
use Framework\App;

$app = new App();

return $app;