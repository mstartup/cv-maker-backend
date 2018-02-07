<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libraries extends Model
{
    public function languages()
    {
        return $this->belongsTo(Languages::class);
    }
}
