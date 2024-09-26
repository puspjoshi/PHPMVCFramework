<?php

/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */
require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;

$app = new Application();

 //$router = new Router();
$app->router->get('/',function(){
        return 'hello world';
});

//$app->userRouter($router);

$app->run();