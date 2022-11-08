<?php namespace GiPlugin\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Gods extends Eloquent {
//    protected $fillable = ['title'];
    protected $guarded = array('id', 'Slug');
    public $timestamps = false;
}