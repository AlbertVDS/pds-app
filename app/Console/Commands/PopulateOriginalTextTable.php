<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Food\Food;
use App\Models\Food\FoodSubstitute;
use App\Models\Food\FoodType;
use App\Models\Language\Language;
use App\Models\Mailing\MailingGroup;
use App\Models\Recipe\Recipe;
use App\Models\Recipe\RecipeArea;
use App\Models\Recipe\RecipeCategory;
use App\Models\Recipe\RecipeIngredient;
use App\Models\Recipe\RecipeMeasurement;
use App\Models\Recipe\RecipeTag;
use App\Models\User\Role;
use App\Models\Language\OriginalText;

class PopulateOriginalTextTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'original-text:populate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pupulate the original text table with all the original text from the database';



    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->food();
        $this->foodType();
        $this->language();
        $this->mailingGroup();
        $this->recipe();
        $this->recipeArea();
        $this->recipeCategory();
        $this->recipeIngredient();
        $this->recipeMeasurement();
        $this->recipeTag();
        $this->role();
    }

    public function food()
    {
        $foods = Food::all();
        foreach ($foods as $food) {
            OriginalText::firstOrCreate([
                'foreign_id' => $food->id,
                'foreign_type' => Food::class
            ]);
        }
    }

    public function foodType()
    {
        $foodTypes = FoodType::all();
        foreach ($foodTypes as $foodType) {
            OriginalText::firstOrCreate([
                'foreign_id' => $foodType->id,
                'foreign_type' => FoodType::class
            ]);
        }
    }

    public function language()
    {
        $languages = Language::all();
        foreach ($languages as $language) {
            OriginalText::firstOrCreate([
                'foreign_id' => $language->id,
                'foreign_type' => Language::class
            ]);
        }
    }

    public function mailingGroup()
    {
        $mailingGroups = MailingGroup::all();
        foreach ($mailingGroups as $mailingGroup) {
            OriginalText::firstOrCreate([
                'foreign_id' => $mailingGroup->id,
                'foreign_type' => MailingGroup::class
            ]);
        }
    }

    public function recipe()
    {
        $recipes = Recipe::all();
        foreach ($recipes as $recipe) {
            OriginalText::firstOrCreate([
                'foreign_id' => $recipe->id,
                'foreign_type' => Recipe::class
            ]);

            OriginalText::firstOrCreate([
                'foreign_id' => $recipe->id,
                'foreign_type' => Recipe::class
            ]);
        }
    }

    public function recipeArea()
    {
        $recipeAreas = RecipeArea::all();
        foreach ($recipeAreas as $recipeArea) {
            OriginalText::firstOrCreate([
                'foreign_id' => $recipeArea->id,
                'foreign_type' => RecipeArea::class
            ]);
        }
    }

    public function recipeCategory()
    {
        $recipeCategories = RecipeCategory::all();
        foreach ($recipeCategories as $recipeCategory) {
            OriginalText::firstOrCreate([
                'foreign_id' => $recipeCategory->id,
                'foreign_type' => RecipeCategory::class
            ]);
        }
    }

    public function recipeIngredient()
    {
        $recipeIngredients = RecipeIngredient::all();
        foreach ($recipeIngredients as $recipeIngredient) {
            OriginalText::firstOrCreate([
                'foreign_id' => $recipeIngredient->id,
                'foreign_type' => RecipeIngredient::class
            ]);
        }
    }

    public function recipeMeasurement()
    {
        $recipeMeasurements = RecipeMeasurement::all();
        foreach ($recipeMeasurements as $recipeMeasurement) {
            OriginalText::firstOrCreate([
                'foreign_id' => $recipeMeasurement->id,
                'foreign_type' => RecipeMeasurement::class
            ]);
        }
    }

    public function recipeTag()
    {
        $recipeTags = RecipeTag::all();
        foreach ($recipeTags as $recipeTag) {
            OriginalText::firstOrCreate([
                'foreign_id' => $recipeTag->id,
                'foreign_type' => RecipeTag::class
            ]);
        }
    }

    public function role()
    {
        $roles = Role::all();
        foreach ($roles as $role) {
            OriginalText::firstOrCreate([
                'foreign_id' => $role->id,
                'foreign_type' => Role::class
            ]);
        }
    }
}
