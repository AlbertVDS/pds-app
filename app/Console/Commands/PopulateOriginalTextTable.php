<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Food;
use App\Models\FoodSubstitute;
use App\Models\FoodType;
use App\Models\Language;
use App\Models\MailingGroup;
use App\Models\Recipe;
use App\Models\RecipeArea;
use App\Models\RecipeCategory;
use App\Models\RecipeIngredient;
use App\Models\RecipeMeasurement;
use App\Models\RecipeTag;
use App\Models\Role;
use App\Models\OriginalText;

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
                'text' => $food->name,
                'target_id' => $food->id,
                'type' => 1
            ]);
        }
    }

    public function foodType()
    {
        $foodTypes = FoodType::all();
        foreach ($foodTypes as $foodType) {
            OriginalText::firstOrCreate([
                'text' => $foodType->name,
                'target_id' => $foodType->id,
                'type' => 2
            ]);
        }
    }

    public function language()
    {
        $languages = Language::all();
        foreach ($languages as $language) {
            OriginalText::firstOrCreate([
                'text' => $language->name,
                'target_id' => $language->id,
                'type' => 3
            ]);
        }
    }

    public function mailingGroup()
    {
        $mailingGroups = MailingGroup::all();
        foreach ($mailingGroups as $mailingGroup) {
            OriginalText::firstOrCreate([
                'text' => $mailingGroup->name,
                'target_id' => $mailingGroup->id,
                'type' => 4
            ]);
        }
    }

    public function recipe()
    {
        $recipes = Recipe::all();
        foreach ($recipes as $recipe) {
            OriginalText::firstOrCreate([
                'text' => $recipe->name,
                'target_id' => $recipe->id,
                'type' => 5
            ]);

            OriginalText::firstOrCreate([
                'text' => $recipe->instructions,
                'target_id' => $recipe->id,
                'type' => 6
            ]);
        }
    }

    public function recipeArea()
    {
        $recipeAreas = RecipeArea::all();
        foreach ($recipeAreas as $recipeArea) {
            OriginalText::firstOrCreate([
                'text' => $recipeArea->name,
                'target_id' => $recipeArea->id,
                'type' => 7
            ]);
        }
    }

    public function recipeCategory()
    {
        $recipeCategories = RecipeCategory::all();
        foreach ($recipeCategories as $recipeCategory) {
            OriginalText::firstOrCreate([
                'text' => $recipeCategory->name,
                'target_id' => $recipeCategory->id,
                'type' => 8
            ]);
        }
    }

    public function recipeIngredient()
    {
        $recipeIngredients = RecipeIngredient::all();
        foreach ($recipeIngredients as $recipeIngredient) {
            OriginalText::firstOrCreate([
                'text' => $recipeIngredient->name,
                'target_id' => $recipeIngredient->id,
                'type' => 9
            ]);
        }
    }

    public function recipeMeasurement()
    {
        $recipeMeasurements = RecipeMeasurement::all();
        foreach ($recipeMeasurements as $recipeMeasurement) {
            OriginalText::firstOrCreate([
                'text' => $recipeMeasurement->name,
                'target_id' => $recipeMeasurement->id,
                'type' => 10
            ]);
        }
    }

    public function recipeTag()
    {
        $recipeTags = RecipeTag::all();
        foreach ($recipeTags as $recipeTag) {
            OriginalText::firstOrCreate([
                'text' => $recipeTag->name,
                'target_id' => $recipeTag->id,
                'type' => 11
            ]);
        }
    }

    public function role()
    {
        $roles = Role::all();
        foreach ($roles as $role) {
            OriginalText::firstOrCreate([
                'text' => $role->name,
                'target_id' => $role->id,
                'type' => 12
            ]);
        }
    }
}
