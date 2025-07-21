<?php

namespace App\Models\Language;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

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
        'foreign_id',
        'foreign_type'
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
        return Auth::check() ? $this->translationLoggedIn() : $this->translationGuest();
    }

    /**
     * Get all translations.
     */
    public function translations()
    {
        return $this->hasMany(Translation::class, 'original_text_id');
    }

    private function translationLoggedIn()
    {
        return $this->hasOne(Translation::class, 'original_text_id')
            ->where('language_id', Auth::user()->language_id);
    }

    private function translationGuest()
    {
        $languageId = Language::where('code', app()->getLocale())->first()->id;
        return $this->hasOne(Translation::class, 'original_text_id')
            ->where('language_id', $languageId);
    }
}
