<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OriginalText extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'original_text';

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'text',
        'target_id',
        'type',
    ];

    /**
     * MorphTo relationship.
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo<Model, OriginalText>
     */
    public function foreign()
    {
        return $this->morphTo();
    }

    /**
     * Get correct attribute.
     * @return string
     */
    public function getRelatedValueAttribute()
    {
        return $this->foreign->name ?: $this->foreign->text;
    }

    /**
     * Get translation.
     */
    public function translation()
    {
        return $this->hasOne(Translation::class, 'original_text_id');
    }
}
