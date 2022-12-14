<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'price','category_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function orders() {
        return $this->belongsToMany('App\Order');
    }
}
