<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'name', 'created_at', 'updated_at'
    ];

    // public function projet_relation()
    // {
    // return $this->hasMany('App\Projets');
    // }

    public function product_type() {
        return $this->belongsTo('App\Projets', 'categories_id');
    }
    

}
