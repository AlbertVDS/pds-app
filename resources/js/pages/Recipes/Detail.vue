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

    <div v-else-if="recipe" class="bg-white rounded-lg shadow-lg">
      <h1 class="text-4xl font-bold text-gray-900 mb-4 p-8 pb-0">{{ recipe.name }}</h1>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
        <div>
          <img v-if="recipe.thumbnail_url" :src="recipe.thumbnail_url" :alt="recipe.name" class="w-full rounded-lg shadow-md" />
        </div>

        <div>
          <h3 class="text-2xl font-semibold text-gray-900 mb-4">Ingredients</h3>
          <ul v-if="recipe.ingredients && recipe.ingredients.length > 0" class="space-y-2">
            <li v-for="ingredient in recipe.ingredients" :key="ingredient.id" class="text-gray-700 border-b pb-2">
              <span class="font-medium">{{ ingredient.name }}:</span>
              <span class="ml-2 italic">{{ ingredient.measurement }}</span>
            </li>
          </ul>
          <div v-else class="p-4 bg-yellow-50 text-yellow-800 rounded">
            <p class="mb-2">No ingredients listed for this recipe.</p>
            <p class="text-sm">The recipe data appears to be incomplete in the database.</p>
          </div>
        </div>
      </div>

      <div class="px-8 py-4">
        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Directions</h3>
        <p v-if="recipe.instructions && recipe.instructions.trim()" class="text-gray-700 whitespace-pre-wrap leading-relaxed">
          {{ recipe.instructions }}
        </p>
        <div v-else class="p-4 bg-yellow-50 text-yellow-800 rounded">
          <p class="mb-2">No instructions available for this recipe.</p>
          <p class="text-sm">The recipe data appears to be incomplete in the database.</p>
        </div>
      </div>

      <ul class="list-group list-group-flush px-8 py-4 space-y-2 border-t">
        <li class="text-gray-700"><i class="fa-solid fa-layer-group mr-2"></i> <span class="font-medium">Category:</span> {{ recipe.category || 'N/A' }}</li>
        <li class="text-gray-700"><i class="fa-solid fa-location-dot mr-2"></i> <span class="font-medium">Area:</span> {{ recipe.area || 'N/A' }}</li>
      </ul>

      <div v-if="recipe.youtube_url" class="px-8 py-4">
        <a :href="recipe.youtube_url" target="_blank" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg transition">
          Watch on YouTube
        </a>
      </div>
    </div>

    <div v-else class="text-center py-8">
      <p class="text-gray-600">Recipe not found.</p>
    </div>
  </div>
</template>

<script setup>
import { computed, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { RouterLink } from 'vue-router'
import { useRecipesStore } from '../../stores/recipes'

const route = useRoute()
const recipesStore = useRecipesStore()

const recipe = computed(() => recipesStore.currentRecipe)
const loading = computed(() => recipesStore.loading)
const error = computed(() => recipesStore.error)

onMounted(() => {
  recipesStore.getRecipeById(route.params.id)
})
</script>
