<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Gestion Dieux / Items
 * Plugin URI:        #
 * Description:       Plugin de gestion Dieux / Items
 * Version:           1.0.0
 * Author:            Tilican
 * Author URI:        #
 * License:           MIT
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/getherbert/framework/bootstrap/autoload.php';
require_once __DIR__ . '/app/twig_ext.php';

herbert('Twig_Environment')->addExtension(new GiPlugin\Twig_Extension\WordpressTemplateExtension());