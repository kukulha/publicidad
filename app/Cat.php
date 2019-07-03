<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
    	'name', 'slug'
    ];

    public function directories()
    {
    	return $this->hasMany(Directory::class);
    }
}
