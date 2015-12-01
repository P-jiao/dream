<?php

namespace App\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Blog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    public $primarkey='id';
    protected $dateFormat='U';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'is_admin', 'password', 'sex', 'phone', 'pro_class'];
    public $timestamps = false;

    protected static function rules()
    {
        return [
            'id' => 'required|digits:10',   //<!-- 代表必需填写,10位数字 -->
            'password' => 'required'        //<!-- 必填 -->
        ];

    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = ['password', 'remember_token'];


    public function grade()
    {
        return $this->hasOne('App\Model\Grade');
    }

}
