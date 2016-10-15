<?php
namespace Chatbox\PageApp;

use Illuminate\Session\SessionManager;
use Illuminate\Session\SessionServiceProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\FileViewFinder;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\ViewServiceProvider;

/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2016/06/05
 * Time: 23:37
 */
class PageAppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->configure("view");
//        $this->app->extend('view.finder', function (FileViewFinder $finder) {
//            $finder->addLocation();
//            return $finder;
//        });
        $this->app->register(ViewServiceProvider::class);

        $app = $this->app;
        $session = new class($app)extends SessionServiceProvider{
            public function register()
            {
                $this->app->extend("session",function($obj){
                    $this->app->configure("session");
                    return $obj;
                });
                $this->app->alias("session",SessionManager::class);
                parent::register();
            }
        };
        $this->app->register($session);
    }
}