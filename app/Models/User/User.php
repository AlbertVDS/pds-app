<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Language\Language;
use App\Models\User\UserMailingGroup;
use App\Models\Recipe\Recipe;
use App\Models\User\Role;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'language_id',
        'mailing_group_ids',
    ];

    /**
     * The attributes with a default value
     * @var array
     */
    protected $attributes = [
        'role_id' => 2,
    ];

    /**
     * The attributes that should be hidden for serialization.
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'mailing_group_ids' => 'array',
        ];
    }

    /**
     * Get the user's role
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get role name
     */
    public function getRoleNameAttribute(): string
    {
        return $this->role->name;
    }

    /**
     * Check if user is admin
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->role->name === 'admin';
    }

    /**
     * Get the user's language
     * @return BelongsTo
     */
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * Get all favourite recipes of the user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Recipe, UserFavRecipe>
     */
    public function favRecipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'user_fav_recipes',
            'user_id',
            'recipe_id'
        );
    }

    /**
     * Get user fodmap settings
     * @return \Illuminate\Database\Eloquent\Relations\HasOne<UserFodmap, User>
     */
    public function fodmap()
    {
        return $this->hasOne(UserFodmap::class);
    }

    /**
     * Get user's subscribed mailing groups
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<UserMailingGroup, User>
     */
    public function mailingGroups()
    {
        return $this->hasMany(UserMailingGroup::class);
    }
}
