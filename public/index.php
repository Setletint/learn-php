<?php

// var_dump($_SERVER);

use App\Exceptions\NotFoundException;

spl_autoload_register(function ($class) {
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});

include __DIR__ . '/../routes.php';
include __DIR__ . '/../helpers.php';
try {
    $router = new App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
    $match = $router->match();
    if($match){
        if(is_callable($match['action'])){
            call_user_func($match['action']);
        } elseif(is_array($match['action']) && count($match['action']) === 2){
            $class = $match['action'][0];
            $controller = new $class();
            $method = $match['action'][1];
            $controller->$method();
        } else {
            // throw error;
        }
    } else {
        throw new NotFoundException();
    }
} catch(NotFoundException $e) {
    http_response_code(404);
    view('404');
}
// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         include 'views/index.php';
//         break;
//     case '/about':
//         include 'views/about.php';
//         break;
//     default: 
//         echo '404';
// }