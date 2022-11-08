<?php namespace GiPlugin;

/** @var \Herbert\Framework\Router $router */

/* Route ITEM */


$router->get([
    'as'   => 'items',
    'uri'  => '/items',
    'uses' => __NAMESPACE__ . '\Controllers\ItemController@index'
]);

$router->get([
    'as'   => 'items',
    'uri'  => '/items/{id}',
    'uses' => __NAMESPACE__ . '\Controllers\ItemController@show'
]);

/* Route GOD */

$router->get([
    'as'   => 'gods',
    'uri'  => '/gods',
    'uses' => __NAMESPACE__ . '\Controllers\GodController@index'
]);

$router->get([
    'as'   => 'gods',
    'uri'  => '/gods/{id}',
    'uses' => __NAMESPACE__ . '\Controllers\GodController@show'
]);
