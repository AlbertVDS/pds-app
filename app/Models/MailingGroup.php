<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailingGroup extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'mailing_groups';

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the users associated with the mailing group.
     */
    public function users()
    {
        return User::whereJsonContains('mailing_group_ids', $this->id)->get();
    }
}
