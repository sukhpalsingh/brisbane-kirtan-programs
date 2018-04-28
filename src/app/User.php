<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password', 'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verificationToken()
    {
        return $this->hasOne(VerificationToken::class);
    }

    public function hasVerified()
    {
        return $this->verified;
    }

    public static function byUserName($username)
    {
        return static::where('username', $username);
    }
}
