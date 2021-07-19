<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingLinkType extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'logo',
    ];

    /**
     * Relationship between User and Role. A user can have one role
     *
     * @var object
     */
    public function type()
    {
        return $this->hasMany(UserMeetingLink::class, 'link_type_id', 'id');
    }
}
