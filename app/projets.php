<?php

namespace App;

use App\categories;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'decription', 'password', 'image_url', 'technology', 'repo_url', 'website_url', 'categories_id',
    //     'created_at', 'update_at'
    // ];

    protected $guarded = [];

    // public function category_relation()
    // {
    //     return $this->belongsTo('App\Categories');
    // }

    public function product_type() {
        return $this->belongsTo('App\Categories', 'categories_id');
    }
    
}
