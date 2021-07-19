<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMeetingLink extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'user_meeting_links';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link',
        'user_id',
        'type_id',
    ];

    /**
     * Relationship between User and Role. A user can have one role
     *
     * @var object
     */
    public function type()
    {
        return $this->belongsTo(MeetingLinkType::class, 'type_id', 'id');
    }

    /**
     * Relationship between User and Role. A user can have one role
     *
     * @var object
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
