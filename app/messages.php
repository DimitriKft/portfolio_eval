<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message', 'created_at', 'updated_at'
    ];
}