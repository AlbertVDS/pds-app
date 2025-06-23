<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\OriginalText;

class Language extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'languages';

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
    ];

    public function translations()
    {
        return $this->hasMany(Translation::class)->with('original');
    }

    public function complete()
    {
        $total = Cache::remember('origional_text_count', 60, function () {
            return OriginalText::count();
        });
        return $this->translations()->count() ? round($this->translations()->count() / $total * 100) . '%' : '0%';
    }

    /**
     * MorphTo relationship.
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo<Model, OriginalText>
     */
    public function foreign()
    {
        return $this->morphTo();
    }

    /**
     * Get all languages which have at least one translation.
     * @return \Illuminate\Database\Eloquent\Collection<int, Language>
     */
    public static function getAvailableLanguages()
    {
        return self::whereIn('id', Translation::select('language_id')
            ->distinct()
            ->pluck('language_id')
            ->toArray())
            ->get();
    }

    /**
     * Get the default language.
     * @return Language|null
     */
    public static function getDefaultLanguage()
    {
        return self::where('code', env('APP_LOCALE'))->first();
    }
}
