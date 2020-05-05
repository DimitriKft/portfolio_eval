<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projets extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'decription', 'password', 'image_url', 'technology', 'repo_url', 'website_url', 'categories_id',
        'created_at', 'update_at'
    ];

    protected $guarded = [];

    public function category_relation()
    {
        return $this->hasMany('App\categories');
    }
}
