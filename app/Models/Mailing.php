<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mailing extends Model
{
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
        'body',
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
}
