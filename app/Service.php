<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
    	'stage_id','name','subtitle', 'slug', 'description', 'file', 'file2'
    ];

    public function stage()
    {
    	return $this->belongsTo(Stage::class);
    }
}
