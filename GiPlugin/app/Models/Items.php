<?php namespace GiPlugin\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Items extends Eloquent {
//    protected $fillable = ['title'];
    protected $guarded = array('ItemId', 'Slug');
    public $timestamps = false;
}