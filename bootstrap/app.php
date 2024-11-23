<?php

use App\Config\Config;
use App\Core\App;

use App\core\Container;
use App\core\Example;

use App\Providers\AppServiceProvider;
use App\Providers\ConfigServiceProvider;
use League\Container\ReflectionContainer;
use Spatie\Ignition\Ignition;

require '../vendor/autoload.php';

$container = Container::getInstance();
$container->delegate(new ReflectionContainer());
$container->addServiceProvider(new ConfigServiceProvider());
$config = $container->get(Config::class);

foreach ($config->get('app.providers') as $provider){
    $container->addServiceProvider(new $provider);
}

$app = new App();
$app->run();
