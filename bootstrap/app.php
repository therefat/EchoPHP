<?php
use App\Core\App;

use App\core\Container;
use App\core\Example;

use League\Container\ReflectionContainer;
use Spatie\Ignition\Ignition;

require '../vendor/autoload.php';

$container = Container::getInstance();
$container->delegate(new ReflectionContainer());

$container->addServiceProvider(new \App\Providers\AppServiceProvider());

$app = new App();
$app->run();
