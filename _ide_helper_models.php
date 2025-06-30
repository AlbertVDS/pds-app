<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Food{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $type_id
 * @property int|null $level
 * @property int|null $weight
 * @property int $fructose
 * @property int $lactose
 * @property int $mannitol
 * @property int $sorbitol
 * @property int $GOS
 * @property int $fructan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Food\FoodType|null $foodType
 * @property-read \App\Models\Language\OriginalText|null $originalText
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Food> $substitutes
 * @property-read int|null $substitutes_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereFructan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereFructose($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereGOS($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereLactose($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereMannitol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereSorbitol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food withoutTrashed()
 */
	class Food extends \Eloquent {}
}

namespace App\Models\Food{
/**
 * 
 *
 * @property int $id
 * @property int $food_id
 * @property int $substitute_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Food\Food|null $food
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute whereFoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute whereSubstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodSubstitute withoutTrashed()
 */
	class FoodSubstitute extends \Eloquent {}
}

namespace App\Models\Food{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Language\OriginalText|null $originalText
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FoodType withoutTrashed()
 */
	class FoodType extends \Eloquent {}
}

namespace App\Models\Language{
/**
 * 
 *
 * @property int $id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ControllerText withoutTrashed()
 */
	class ControllerText extends \Eloquent {}
}

namespace App\Models\Language{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Language\Translation> $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language withoutTrashed()
 */
	class Language extends \Eloquent {}
}

namespace App\Models\Language{
/**
 * 
 *
 * @property int $id
 * @property int $foreign_id
 * @property string $foreign_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @property-read string $related_value
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText whereForeignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText whereForeignType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OriginalText withoutTrashed()
 */
	class OriginalText extends \Eloquent {}
}

namespace App\Models\Language{
/**
 * 
 *
 * @property int $id
 * @property int $language_id
 * @property int $original_text_id
 * @property string $translation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @property-read \App\Models\Language\OriginalText|null $original
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereOriginalTextId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation withoutTrashed()
 */
	class Translation extends \Eloquent {}
}

namespace App\Models\Language{
/**
 * 
 *
 * @property int $id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ViewText withoutTrashed()
 */
	class ViewText extends \Eloquent {}
}

namespace App\Models\Mailing{
/**
 * 
 *
 * @property int $id
 * @property int $mailing_id
 * @property int $user_id
 * @property string $body
 * @property int $sent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\User\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData whereMailingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData whereSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailData withoutTrashed()
 */
	class MailData extends \Eloquent {}
}

namespace App\Models\Mailing{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property int|null $mailing_group_id
 * @property string $body
 * @property string|null $schedule
 * @property int $user_data_created
 * @property int $sent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Mailing\MailData> $mailData
 * @property-read int|null $mail_data_count
 * @property-read \App\Models\Mailing\MailingGroup|null $mailingGroup
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Mailing\MailData> $unsentMailData
 * @property-read int|null $unsent_mail_data_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereMailingGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereSchedule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing whereUserDataCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mailing withoutTrashed()
 */
	class Mailing extends \Eloquent {}
}

namespace App\Models\Mailing{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailingGroup withoutTrashed()
 */
	class MailingGroup extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property int $tmdb_id
 * @property string $name
 * @property int $category_id
 * @property int $area_id
 * @property string $thumbnail_url
 * @property array<array-key, mixed> $tags
 * @property string $youtube_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Recipe\RecipeIngredientMeasurement> $ingredientMeasurements
 * @property-read int|null $ingredient_measurements_count
 * @property-read \App\Models\Recipe\RecipeInstruction|null $instructions
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereThumbnailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereTmdbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe whereYoutubeUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recipe withoutTrashed()
 */
	class Recipe extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeArea withoutTrashed()
 */
	class RecipeArea extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $food_ids
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory whereFoodIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeCategory withoutTrashed()
 */
	class RecipeCategory extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Food\Food> $foods
 * @property-read int|null $foods_count
 * @property-read Model $foreign
 * @property-read mixed $substitutes
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredient withoutTrashed()
 */
	class RecipeIngredient extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property int $recipe_ingredient_id
 * @property int $food_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Food\Food> $foods
 * @property-read int|null $foods_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood whereFoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood whereRecipeIngredientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientFood withoutTrashed()
 */
	class RecipeIngredientFood extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property int $recipe_id
 * @property int $ingredient_id
 * @property int|null $measurement_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Recipe\RecipeIngredient|null $ingredient
 * @property-read \App\Models\Recipe\RecipeMeasurement|null $measurement
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement whereIngredientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement whereMeasurementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeIngredientMeasurement withoutTrashed()
 */
	class RecipeIngredientMeasurement extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property string $instruction
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction whereInstruction($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeInstruction withoutTrashed()
 */
	class RecipeInstruction extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeMeasurement withoutTrashed()
 */
	class RecipeMeasurement extends \Eloquent {}
}

namespace App\Models\Recipe{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RecipeTag withoutTrashed()
 */
	class RecipeTag extends \Eloquent {}
}

namespace App\Models\User{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Model $foreign
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role withoutTrashed()
 */
	class Role extends \Eloquent {}
}

namespace App\Models\User{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $role_id
 * @property int $language_id
 * @property array<array-key, mixed>|null $mailing_group_ids
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Recipe\Recipe> $favRecipes
 * @property-read int|null $fav_recipes_count
 * @property-read \App\Models\User\UserFodmap|null $fodmap
 * @property-read string $role_name
 * @property-read \App\Models\Language\Language|null $language
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User\UserMailingGroup> $mailingGroups
 * @property-read int|null $mailing_groups_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\User\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMailingGroupIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models\User{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $recipe_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFavRecipe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFavRecipe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFavRecipe query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFavRecipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFavRecipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFavRecipe whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFavRecipe whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFavRecipe whereUserId($value)
 */
	class UserFavRecipe extends \Eloquent {}
}

namespace App\Models\User{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $fructose
 * @property int $lactose
 * @property int $mannitol
 * @property int $sorbitol
 * @property int $GOS
 * @property int $fructan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereFructan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereFructose($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereGOS($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereLactose($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereMannitol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereSorbitol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFodmap withoutTrashed()
 */
	class UserFodmap extends \Eloquent {}
}

namespace App\Models\User{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $mailing_group_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup whereMailingGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserMailingGroup withoutTrashed()
 */
	class UserMailingGroup extends \Eloquent {}
}

