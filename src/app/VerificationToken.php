<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class VerificationToken extends Model
{
    protected $fillable = ['token'];

    public function getRouteKeyName()
    {
    	return 'token';
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

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
