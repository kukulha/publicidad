<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = [
    	'name', 'slug'
    ];

    public function services()
    {
    	return $this->hasMany(Service::class);
    }
}
