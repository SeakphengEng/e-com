<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * @method static findOrFail(int $id)
 */

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin', 'avatar',
        'phone_number', 'career', 'address', 'city_country',
        'bio'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles() {

        #return $this->belongsToMany('App\Role');
        return $this->belongsToMany(Role::class);

    }


    public function hasAnyRoles($roles) { //check multiple role

        return null !== $this->roles()->whereIn('name', $roles)->first();

    }

    public function hasAnyRole($role) {    //check one role

        return null !== $this->roles()->where('name', $role)->first();

    }

}
