<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image_url', 'user_id', 'created_at', 'updated_at'
    ];

    public function user_relation()
    {
        return $this->belongsTo('App\user');
    }
}
