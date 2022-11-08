<?php namespace GiPlugin\Controllers;

//use Herbert\Framework\D;

use GiPlugin\Helper;
use Herbert\Framework\Http;

class AdminController {

    /**
     * Show home page
     */
    public function index()
    {
//        dd(plugin_directory());
        return view('@GiPlugin/admin/home.twig');
    }

}