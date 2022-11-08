<?php namespace GiPlugin;

/** @var \Herbert\Framework\Shortcode $shortcode */

// ALLOW SHORTCODE ON WIDJET
add_filter('widget_text', 'do_shortcode');


// SHORTCODE GOD ROTATION
$shortcode->add('TgiPluginGodRotation', __NAMESPACE__ . '\Controllers\GodController@rotation_shortcode');

// SHORTCODE GOD
$shortcode->add('TgiPluginGodOne', __NAMESPACE__ . '\Controllers\GodController@show_shortcode', ['name' => 'name']);
$shortcode->add('TgiPluginGodAll', __NAMESPACE__ . '\Controllers\GodController@index_shortcode');