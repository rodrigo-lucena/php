<?php


use Slim\Slim;

require_once 'vendor/autoload.php';

//$app = new \Slim\Slim();
$app = new Slim();

$app->get('/',function(){
    echo "Tela inicial";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
    $app->run();

?>