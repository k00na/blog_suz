<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = ['title', 'body', 'category_id', 'slug'];

    public function category(){

    	$this->belongsTo('App\Category');
    }

    public function tags(){
    	$this->belongsToMany('App\Tag');
    }



}
