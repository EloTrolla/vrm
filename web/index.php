<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// definitions

$app['debug'] = true;


$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__.'/../views',
]);



$app->get('/bookings/create', function () use ($app) { // http://localhost:8000/hello  return hello world

    return $app['twig']->render('base.html.twig');

});


$app->run();