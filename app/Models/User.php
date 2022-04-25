<?php

namespace App\Models;

use App\Traits\HashingIds;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,SoftDeletes, HashingIds, HasRoles;

    //  The attributes that are mass assignable.
    protected $fillable = ['isActive','name','email','password'];

    //  The attributes that should be hidden for arrays.
    protected $hidden = ['password', 'remember_token'];

    //  The attributes that should be cast to native types.
    protected $casts = [  'email_verified_at' => 'datetime'];

    //  format user active status
    public function getActiveAttribute(): string
    {
        if ($this->isActive) {
            return '<span class="btn btn-success btn-sm">Yes</span>';
        }
        return '<span class="btn btn-danger btn-sm">No</span>';
    }

    // User Has many roles relationship
    public function role(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Role::class,'model_has_roles','model_id');
    }


}
