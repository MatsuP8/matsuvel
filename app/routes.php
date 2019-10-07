<?php

$routes = [];
$template = new \Matsuvel\TemplateFactory(__DIR__ . '/view/');

$routes['/'] = function () use ($template) {
    return [200, ['Content-Type' => 'text/html'], $template->create('index',[
        'name' => 'まつぴー'
    ])];
};

$routes['/phpinfo.php'] = function () {
    ob_start();
    phpinfo();
    return [200, ['Content-Type' => 'text/html'], ob_get_clean()];
};

return $routes;

