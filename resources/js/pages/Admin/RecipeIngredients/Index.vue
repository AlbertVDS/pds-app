<template>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Manage Recipe Ingredients</h1>
    <div v-if="loading" class="text-center text-gray-600">Loading...</div>
    <div v-else-if="ingredients.length === 0" class="text-center text-gray-600">No ingredients found</div>
    <div v-else class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 border-b text-left">Name</th>
            <th class="px-6 py-3 border-b text-left">Type</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="ingredient in ingredients" :key="ingredient.id" class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ ingredient.name }}</td>
            <td class="px-6 py-4">{{ ingredient.type }}</td>
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
  name: 'AdminRecipeIngredients',
  setup() {
    const ingredients = ref([])
    const loading = ref(false)

    const fetchIngredients = async () => {
      loading.value = true
      try {
        const response = await api.get('/api/recipe-ingredients')
        ingredients.value = response.data.data || response.data
      } catch (error) {
        console.error('Error fetching ingredients:', error)
      } finally {
        loading.value = false
      }
    }

    onMounted(() => fetchIngredients())

    return { ingredients, loading }
  }
}
</script>
