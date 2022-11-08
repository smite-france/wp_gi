<?php namespace GiPlugin;

/** @var \Herbert\Framework\Enqueue $enqueue */

$enqueue->front([
    'as'  => 'tgi-css1',
    'src' => Helper::assetUrl('/css/style.css'),
    'filter' => [ 'postType' => 'god' ]
]);

$enqueue->front([
    'as'  => 'tgi-js1',
    'src' => Helper::assetUrl('/js/jquery-2.1.4.min.js'),
    'filter' => [ 'postType' => 'god' ]
]);

$enqueue->front([
    'as'  => 'tgi-js2',
    'src' => Helper::assetUrl('/js/main.js'),
    'filter' => [ 'postType' => 'god' ]
]);