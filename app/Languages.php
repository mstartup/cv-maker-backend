<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $guarded = [];
    
    public function libraries()
    {
        return $this->hasMany(Libraries::class);
    }
}
