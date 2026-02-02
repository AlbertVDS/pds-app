<template>
  <div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold">Manage Recipes</h1>
      <router-link to="/admin/recipes/create" class="bg-blue-600 text-white px-4 py-2 rounded">
        Create Recipe
      </router-link>
    </div>
    <div v-if="loading" class="text-center text-gray-600">Loading...</div>
    <div v-else-if="recipes.length === 0" class="text-center text-gray-600">No recipes found</div>
    <div v-else class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 border-b text-left">Name</th>
            <th class="px-6 py-3 border-b text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="recipe in recipes" :key="recipe.id" class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ recipe.name }}</td>
            <td class="px-6 py-4 space-x-2">
              <router-link :to="`/admin/recipes/${recipe.id}/edit`" class="text-blue-600 hover:underline">Edit</router-link>
              <button @click="deleteRecipe(recipe.id)" class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import { api } from '../../../services/api'

export default {
  name: 'AdminRecipes',
  setup() {
    const recipes = ref([])
    const loading = ref(false)

    const fetchRecipes = async () => {
      loading.value = true
      try {
        const response = await api.get('/api/recipes')
        recipes.value = response.data.data || response.data
      } catch (error) {
        console.error('Error fetching recipes:', error)
      } finally {
        loading.value = false
      }
    }

    const deleteRecipe = async (id) => {
      if (confirm('Are you sure?')) {
        try {
          await api.delete(`/api/recipes/${id}`)
          recipes.value = recipes.value.filter(r => r.id !== id)
        } catch (error) {
          console.error('Error deleting recipe:', error)
        }
      }
    }

    onMounted(() => fetchRecipes())

    return { recipes, loading, deleteRecipe }
  }
}
</script>
