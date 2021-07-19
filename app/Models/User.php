<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Relationship between User and Role. A user can have one role
     *
     * @var object
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Relationship between User and Role. A user can have one role
     *
     * @var object
     */
    public function links()
    {
        return $this->hasMany(UserMeetingLink::class);
    }
}
