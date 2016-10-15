<?php

/** @var \Composer\Autoload\ClassLoader $composer */
$composer = require_once __DIR__.'/../vendor/autoload.php';

try {
    (new \Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    throw $e;
}

$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/app')
);

$app->withFacades();

$app->withEloquent();

$app->singleton(\Illuminate\Contracts\Debug\ExceptionHandler::class,\App\Exceptions\Handler::class);

$app->register(\Chatbox\PageApp\PageAppServiceProvider::class);
$app->register(\Chatbox\RestApp\RestApiServiceProvider::class);

require __DIR__ . "/pageapp/router.php";
require __DIR__ . "/restapp/router.php";

return $app;
