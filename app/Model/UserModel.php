<?php

namespace App\model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class UserModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
    protected $fillable = ['number','name','password','phone','industry','company','address','qq','email', 'cnumber'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    //public $timestamps = false;
    public static $rules = array(
        'number'=>'required|alpha|min:2|unique:users',
        'name'=>'required|alpha|min:2',
       /* 'phone'=>'required|num|min:11',
        'industry'=>'required',
        'company'=>'required',
        'address',
        'qq',
        'email'=>'email',
        'cnumber',*/
        'password'=>'required|alpha_num|between:6,8|confirmed',
        'password_confirmation'=>'required|alpha_num|between:6,8',
    );

}


