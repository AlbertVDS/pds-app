<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mailing extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'mailings';

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'mailing_group_id',
        'body',
        'schedule',
        'user_data_created',
        'sent',
    ];

    /**
     * Get mail data associated with the mailing.
     */
    public function mailData(): HasMany
    {
        return $this->hasMany(MailData::class);
    }

    /**
     * Get all unsent mail data associated with the mailing.
     * @return HasMany
     */
    public function unsentMailData(): HasMany
    {
        return $this->hasMany(MailData::class)->where('sent', false);
    }

    /**
     * Get the mailing group associated with the mailing.
     */
    public function mailingGroup()
    {
        return $this->belongsTo(MailingGroup::class, 'mailing_group_id');
    }

    /**
     * Get mailing group name.
     */
    public function mailingGroupName()
    {
        return translate($this->mailingGroup->name ?? 'No group');
    }
}
