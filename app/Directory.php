<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $fillable = [
    	'cat_id','file', 'name', 'slug' , 'address' , 'phone', 'email', 'web', 'facebook', 'twitter', 'instagram', 'linkedin', 'description'
    ];

    public function cats()
    {
    	return $this->belongsTo(Cat::class);
    }
}
