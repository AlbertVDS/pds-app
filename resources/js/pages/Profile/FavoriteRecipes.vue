<template>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">My Favorite Recipes</h1>
    
    <div v-if="loading" class="text-center text-gray-600">
      <p>Loading...</p>
    </div>

    <div v-else-if="favorites.length === 0" class="text-center text-gray-600">
      <p>No favorite recipes yet</p>
    </div>

    <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div v-for="recipe in favorites" :key="recipe.id" class="bg-white border rounded-lg shadow p-6">
        <h2 class="text-xl font-bold mb-2">{{ recipe.name }}</h2>
        <p class="text-gray-600 mb-4">{{ recipe.description }}</p>
        <div class="flex gap-2">
          <router-link :to="`/recipes/${recipe.id}`" class="text-blue-600 hover:underline">
            View
          </router-link>
          <button @click="removeFavorite(recipe.id)" class="text-red-600 hover:underline">
            Remove
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import { api } from '../../services/api'

export default {
  name: 'FavoriteRecipes',
  setup() {
    const favorites = ref([])
    const loading = ref(false)

    const fetchFavorites = async () => {
      loading.value = true
      try {
        const response = await api.get('/api/user/favorite-recipes')
        favorites.value = response.data.data || response.data
      } catch (error) {
        console.error('Error fetching favorites:', error)
      } finally {
        loading.value = false
      }
    }

    const removeFavorite = async (recipeId) => {
      try {
        await api.delete(`/api/user/favorite-recipes/${recipeId}`)
        favorites.value = favorites.value.filter(r => r.id !== recipeId)
      } catch (error) {
        console.error('Error removing favorite:', error)
      }
    }

    onMounted(() => {
      fetchFavorites()
    })

    return {
      favorites,
      loading,
      removeFavorite
    }
  }
}
</script>
