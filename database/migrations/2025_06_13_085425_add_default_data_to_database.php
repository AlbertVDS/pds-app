<?php

use Illuminate\Database\Migrations\Migration;
use Database\Migrations\Data\ControllerTextTableData;
use Database\Migrations\Data\FoodsTableData;
use Database\Migrations\Data\FoodSubstitutesTableData;
use Database\Migrations\Data\FoodTypesTableData;
use Database\Migrations\Data\LanguagesTableData;
use Database\Migrations\Data\MailingGroupsTableData;
use Database\Migrations\Data\MailingsTableData;
use Database\Migrations\Data\OriginalTextTableData;
use Database\Migrations\Data\RecipeAreasTableData;
use Database\Migrations\Data\RecipeCategoriesTableData;
use Database\Migrations\Data\RecipeIngredientFoodsTableData;
use Database\Migrations\Data\RecipeIngredientMeasurementsTableData;
use Database\Migrations\Data\RecipeIngredientsTableData;
use Database\Migrations\Data\RecipeInstructionsTableData;
use Database\Migrations\Data\RecipeMeasurementsTableData;
use Database\Migrations\Data\RecipesTableData;
use Database\Migrations\Data\RecipeTagsTableData;
use Database\Migrations\Data\RolesTableData;
use Database\Migrations\Data\TranslationsTableData;
use Database\Migrations\Data\UserFavRecipesTableData;
use Database\Migrations\Data\UserFodmapsTableData;
use Database\Migrations\Data\UserMailDataTableData;
use Database\Migrations\Data\UserMailingGroupsTableData;
use Database\Migrations\Data\UsersTableData;
use Database\Migrations\Data\ViewTextTableData;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        ControllerTextTableData::insert();
        FoodsTableData::insert();
        FoodSubstitutesTableData::insert();
        FoodTypesTableData::insert();
        LanguagesTableData::insert();
        MailingGroupsTableData::insert();
        MailingsTableData::insert();
        OriginalTextTableData::insert();
        RecipeAreasTableData::insert();
        RecipeCategoriesTableData::insert();
        RecipeIngredientFoodsTableData::insert();
        RecipeIngredientMeasurementsTableData::insert();
        RecipeIngredientsTableData::insert();
        RecipeInstructionsTableData::insert();
        RecipeMeasurementsTableData::insert();
        RecipesTableData::insert();
        RecipeTagsTableData::insert();
        RolesTableData::insert();
        TranslationsTableData::insert();
        UserFavRecipesTableData::insert();
        UserFodmapsTableData::insert();
        UserMailDataTableData::insert();
        UserMailingGroupsTableData::insert();
        UsersTableData::insert();
        ViewTextTableData::insert();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        ControllerTextTableData::truncate();
        FoodsTableData::truncate();
        FoodSubstitutesTableData::truncate();
        FoodTypesTableData::truncate();
        LanguagesTableData::truncate();
        MailingGroupsTableData::truncate();
        MailingsTableData::truncate();
        OriginalTextTableData::truncate();
        RecipeAreasTableData::truncate();
        RecipeCategoriesTableData::truncate();
        RecipeIngredientFoodsTableData::truncate();
        RecipeIngredientMeasurementsTableData::truncate();
        RecipeIngredientsTableData::truncate();
        RecipeInstructionsTableData::truncate();
        RecipeMeasurementsTableData::truncate();
        RecipesTableData::truncate();
        RecipeTagsTableData::truncate();
        RolesTableData::truncate();
        TranslationsTableData::truncate();
        UserFavRecipesTableData::truncate();
        UserFodmapsTableData::truncate();
        UserMailDataTableData::truncate();
        UserMailingGroupsTableData::truncate();
        UsersTableData::truncate();
        ViewTextTableData::truncate();
    }
};
