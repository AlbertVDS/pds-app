<template>
  <div>
    <RouterLink to="/recipes" class="text-green-600 hover:text-green-700 font-semibold mb-6 inline-block">
      ← Back to Recipes
    </RouterLink>

    <div v-if="loading" class="text-center py-8">
      <p class="text-gray-600">Loading recipe details...</p>
    </div>

    <div v-else-if="error" class="p-4 bg-red-50 text-red-700 rounded-lg">
      {{ error }}
    </div>

    <div v-else-if="recipe" class="bg-white rounded-lg shadow-lg p-8">
      <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ recipe.name }}</h1>
      
      <div class="flex gap-6 text-gray-600 mb-8">
        <span v-if="recipe.servings">👥 Servings: {{ recipe.servings }}</span>
        <span v-if="recipe.preparation_time">⏱️ Prep: {{ recipe.preparation_time }} mins</span>
        <span v-if="recipe.cooking_time">🍳 Cook: {{ recipe.cooking_time }} mins</span>
      </div>

      <p v-if="recipe.description" class="text-gray-700 mb-8">{{ recipe.description }}</p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-2xl font-semibold text-gray-900 mb-4">Ingredients</h3>
          <ul v-if="recipe.ingredients && recipe.ingredients.length > 0" class="space-y-2">
            <li v-for="ingredient in recipe.ingredients" :key="ingredient.id" class="flex items-center text-gray-700">
              <span class="mr-3">✓</span>
              <span>{{ ingredient.quantity }} {{ ingredient.unit }} {{ ingredient.name }}</span>
            </li>
          </ul>
          <p v-else class="text-gray-600">No ingredients listed.</p>
        </div>

        <div>
          <h3 class="text-2xl font-semibold text-gray-900 mb-4">Instructions</h3>
          <ol v-if="recipe.instructions" class="space-y-3 list-decimal list-inside">
            <li v-for="(instruction, index) in recipe.instructions.split('\n')" :key="index" class="text-gray-700">
              {{ instruction.trim() }}
            </li>
          </ol>
          <p v-else class="text-gray-600">No instructions available.</p>
        </div>
      </div>

      <div v-if="recipe.areas && recipe.areas.length > 0" class="mt-8 p-4 bg-blue-50 rounded-lg">
        <h3 class="text-lg font-semibold text-blue-900 mb-2">Cuisine Type</h3>
        <div class="flex flex-wrap gap-2">
          <span v-for="area in recipe.areas" :key="area.id" class="inline-block bg-blue-200 text-blue-900 px-3 py-1 rounded-full text-sm">
            {{ area.name }}
          </span>
        </div>
      </div>
    </div>

    <div v-else class="text-center py-8">
      <p class="text-gray-600">Recipe not found.</p>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { RouterLink } from 'vue-router'
import { useRecipesStore } from '../../stores/recipes'

const route = useRoute()
const recipesStore = useRecipesStore()

const recipe = ref(recipesStore.currentRecipe)
const loading = ref(recipesStore.loading)
const error = ref(recipesStore.error)

onMounted(() => {
  recipesStore.getRecipeById(route.params.id)
})
</script>
