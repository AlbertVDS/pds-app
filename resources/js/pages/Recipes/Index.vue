<template>
  <div>
    <div class="mb-8">
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Recipes</h1>
      
      <div class="flex flex-col md:flex-row gap-4">
        <input
          v-model="searchQuery"
          type="text"
          placeholder="Search recipes..."
          class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
          @keyup.enter="handleSearch"
        />
        <button
          @click="handleSearch"
          class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition"
        >
          Search
        </button>
      </div>
    </div>

    <div v-if="loading" class="text-center py-8">
      <p class="text-gray-600">Loading recipes...</p>
    </div>

    <div v-else-if="error" class="p-4 bg-red-50 text-red-700 rounded-lg">
      {{ error }}
    </div>

    <div v-else-if="recipes.length === 0" class="text-center py-8">
      <p class="text-gray-600">No recipes found. Try a different search.</p>
    </div>

    <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <RouterLink
        v-for="recipe in recipes"
        :key="recipe.id"
        :to="`/recipes/${recipe.id}`"
        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition cursor-pointer"
      >
        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ recipe.name }}</h3>
        <p class="text-gray-600 text-sm mb-4">{{ recipe.description?.substring(0, 100) }}...</p>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <span>👥 Servings: {{ recipe.servings || 'N/A' }}</span>
          <span>⏱️ {{ recipe.preparation_time || 'N/A' }} mins</span>
        </div>
      </RouterLink>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { RouterLink } from 'vue-router'
import { useRecipesStore } from '../../stores/recipes'

const recipesStore = useRecipesStore()
const searchQuery = ref('')

const recipes = ref(recipesStore.recipes)
const loading = ref(recipesStore.loading)
const error = ref(recipesStore.error)

onMounted(() => {
  recipesStore.fetchRecipes()
})

const handleSearch = () => {
  if (searchQuery.value.trim()) {
    recipesStore.searchRecipes(searchQuery.value)
  } else {
    recipesStore.fetchRecipes()
  }
}
</script>
