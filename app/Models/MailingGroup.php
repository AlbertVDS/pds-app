<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MailingGroup extends Model
{
    use SoftDeletes;

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
     * Get group name and translate it if needed
     * @return array|string|null
     */
    public function getName()
    {
        return translate($this->name);
    }

    /**
     * Get the users associated with the mailing group.
     */
    public function users()
    {
        return User::whereJsonContains('mailing_group_ids', $this->id)->get();
    }

    /**
     * MorphTo relationship.
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo<Model, OriginalText>
     */
    public function foreign()
    {
        return $this->morphTo();
    }
}
