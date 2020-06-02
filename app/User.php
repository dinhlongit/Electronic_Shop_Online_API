<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function unauthorized($message = null){
        return response()->json([
            'message' => $message ? $message : 'You are unauthorized to access this resource',
            'success' => false
        ], 401);
    }
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
                $this->unauthorized();
        }
        return $this->hasRole($roles) ||
            $this->unauthorized();
    }

    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }


    public function transactions(){
        return $this->hasMany(Transaction::class,'user_id','id');
    }


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    protected $fillable = [
        'name','phone_number', 'email', 'password','birthday','address','address_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guarded=[];
    public function userrole(){
        $this->hasMany('App/UserRole','user_id','id');
    }

    public function roles(){
       return $this->belongsToMany(\App\Role::class,'user_roles')->withPivot('user_id','role_id');
    }

}
