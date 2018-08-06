<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'password','role'];
    CONST USER=1;
    CONST ADMIN=2;

    public static function getUsersRoles(){
        return [
            self::ADMIN=>'کاربر مدیر',
            self::USER=>'کاربر عادی'
        ];
    }

    public function userposts()
    {
       return $this->hasMany(Post::class,'post_author' );
    }
    
}
