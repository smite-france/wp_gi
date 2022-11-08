<?php namespace GiPlugin\Controllers;

//use Herbert\Framework\D;
use Herbert\Framework\Http;
use GiPlugin\Models\Items;

class ItemController {

    /**
     * Show home page
     */
    public function index()
    {
        $all_items =  Items::all()->sortBy('DeviceName')->toArray();
        // traitement for unserialize !
        foreach($all_items as $k => $v){
            $all_items[$k]['ItemDescription'] = unserialize( $v['ItemDescription']);
        }
//        dd($all_items);
        return view('@GiPlugin/item/index.twig',['all_items' => $all_items ] );
    }

    /**
     * Show configure page
     */
    public function show($id)
    {
        echo $id;
//        return view('@TgiPlugin/admin/configure.twig');
    }

}