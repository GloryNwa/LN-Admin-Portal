<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    //

    public function user()
    {
        return $this->hasMany("app\User",'id','network');
    }
}
