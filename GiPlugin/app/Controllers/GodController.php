<?php namespace GiPlugin\Controllers;

//use Herbert\Framework\D;
use Herbert\Framework\Http;
use GiPlugin\Models\Gods;

class GodController {

    /**
     * Show home page
     */
    public function index()
    {
        $all_gods =  Gods::all()->sortBy('Name')->toArray();
        // traitement for unserialize !
        foreach($all_gods as $k => $v){
            $all_gods[$k]['Ability_1'] = unserialize( $v['Ability_1']);
            $all_gods[$k]['Ability_2'] = unserialize( $v['Ability_2']);
            $all_gods[$k]['Ability_3'] = unserialize( $v['Ability_3']);
            $all_gods[$k]['Ability_4'] = unserialize( $v['Ability_4']);
            $all_gods[$k]['Ability_5'] = unserialize( $v['Ability_5']);
            $one_god[$k]['Lore'] = str_replace('\n','<br>',$v['Lore']);
        }
        return view('@GiPlugin/god/page/index.twig',['all_gods' => $all_gods ] );
    }

    /**
     * Show configure page
     */
    public function show($id)
    {
        $one_god = Gods::all()->where('Slug',$id)->toArray();
        // traitement for unserialize !
        foreach( $one_god as $k => $v ){
            $one_god[$k]['Ability_1'] = unserialize( $v['Ability_1']);
            $one_god[$k]['Ability_2'] = unserialize( $v['Ability_2']);
            $one_god[$k]['Ability_3'] = unserialize( $v['Ability_3']);
            $one_god[$k]['Ability_4'] = unserialize( $v['Ability_4']);
            $one_god[$k]['Ability_5'] = unserialize( $v['Ability_5']);
            $one_god[$k]['Lore'] = str_replace('\n','<br>',$v['Lore']);
        }
        return view('@GiPlugin/god/page/show.twig',['one_god' => $one_god ] );
    }

    public function rotation()
    {
        $god_rotation = Gods::all()->where('OnFreeRotation','true')->toArray();
        foreach( $god_rotation as $k => $v ){
            $god_rotation[$k]['Ability_1'] = unserialize( $v['Ability_1']);
            $god_rotation[$k]['Ability_2'] = unserialize( $v['Ability_2']);
            $god_rotation[$k]['Ability_3'] = unserialize( $v['Ability_3']);
            $god_rotation[$k]['Ability_4'] = unserialize( $v['Ability_4']);
            $god_rotation[$k]['Ability_5'] = unserialize( $v['Ability_5']);
            $one_god[$k]['Lore'] = str_replace('\n','<br>',$v['Lore']);
        }

        return view('@GiPlugin/god/page/rotation.twig',['god_rotation' => $god_rotation ] );
    }

    /**
     * Show home page
     */
    public function index_shortcode()
    {
        $all_gods =  Gods::all()->sortBy('Name')->toArray();
        // traitement for unserialize !
        foreach($all_gods as $k => $v){
            $all_gods[$k]['Ability_1'] = unserialize( $v['Ability_1']);
            $all_gods[$k]['Ability_2'] = unserialize( $v['Ability_2']);
            $all_gods[$k]['Ability_3'] = unserialize( $v['Ability_3']);
            $all_gods[$k]['Ability_4'] = unserialize( $v['Ability_4']);
            $all_gods[$k]['Ability_5'] = unserialize( $v['Ability_5']);
            $one_god[$k]['Lore'] = str_replace('\n','<br>',$v['Lore']);
        }
        return view('@GiPlugin/god/shortcode/index.twig',['all_gods' => $all_gods ] );
    }

    /**
     * Show configure page
     */
    public function show_shortcode($name)
    {
        $one_god = Gods::all()->where('Slug',$name)->toArray();
        // traitement for unserialize !
        foreach( $one_god as $k => $v ){
            $one_god[$k]['Ability_1'] = unserialize( $v['Ability_1']);
            $one_god[$k]['Ability_2'] = unserialize( $v['Ability_2']);
            $one_god[$k]['Ability_3'] = unserialize( $v['Ability_3']);
            $one_god[$k]['Ability_4'] = unserialize( $v['Ability_4']);
            $one_god[$k]['Ability_5'] = unserialize( $v['Ability_5']);
            $one_god[$k]['Lore'] = str_replace('\n','<br>',$v['Lore']);
        }
        return view('@GiPlugin/god/shortcode/show.twig',['one_god' => $one_god ] );
    }


    public function rotation_shortcode()
    {
        $god_rotation = Gods::all()->where('OnFreeRotation','true')->toArray();
		//dd($god_rotation);
        foreach( $god_rotation as $k => $v ){
            $god_rotation[$k]['Ability_1'] = unserialize( $v['Ability_1']);
            $god_rotation[$k]['Ability_2'] = unserialize( $v['Ability_2']);
            $god_rotation[$k]['Ability_3'] = unserialize( $v['Ability_3']);
            $god_rotation[$k]['Ability_4'] = unserialize( $v['Ability_4']);
            $god_rotation[$k]['Ability_5'] = unserialize( $v['Ability_5']);
            $one_god[$k]['Lore'] = str_replace('\n','<br>',$v['Lore']);
        }

        return view('@GiPlugin/god/shortcode/rotation.twig',['god_rotation' => $god_rotation ] );
    }

}