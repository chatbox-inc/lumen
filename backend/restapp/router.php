<?php
use Illuminate\Http\Request;

$app->group([
    "middleware" => [
        \Chatbox\RestAPI\Http\Middleware\HttpExceptionHandler::class,
        \Chatbox\RestAPI\Http\Middleware\APIResponseHandler::class
        ]
],function($router){
    $router->get("/api/status",function(){
        return [];
    });

    $router->get("/api/missing",function(){
        abort(404);
    });

    $router->get("/api/error",function(){
        throw new \Exception();
    });
});

