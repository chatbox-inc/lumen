<?php
use Illuminate\Http\Request;

$app->group([
    "middleware" => [
        \Illuminate\Session\Middleware\StartSession::class
    ]
],function($router){
    $router->get("/",function(Request $request){
        $counter = $request->session()->get("counter",5);
        $request->session()->put("counter",$counter+1);
        return view("welcome",[
            "counter" => $counter
        ]);
    });
});
