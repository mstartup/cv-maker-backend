<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    public function testResult()
    {
        return $this->belongsTo(User::class); //Check where test result goes
    }
}
