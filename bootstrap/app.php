<?php
use App\Core\App;
use League\Container\Container;
use Spatie\Ignition\Ignition;

require '../vendor/autoload.php';

$container = new Container();

$container->addServiceProvider(new \App\Providers\AppServiceProvider());
var_dump($container->get('name'));
$app = new App();
$app->run();
