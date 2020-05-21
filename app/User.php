<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Network;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'network', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function full_name()
    {
        return ucfirst(strtolower($this->first_name)) . " " . ucfirst(strtolower($this->last_name));
    }


    public function networkn()
    {
        return $this->belongsTo("App\Network", 'network', 'id');
    }

    public function timeline()
    {
        return $this->belongsTo("App\Timeline");
    }

    public function comments()
    {
        return $this->hasMany("App\Comment");
    }

}
