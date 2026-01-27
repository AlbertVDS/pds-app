<template>
  <div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold">Manage Foods</h1>
      <router-link to="/admin/foods/create" class="btn btn-primary bg-blue-600 text-white px-4 py-2 rounded">
        Create Food
      </router-link>
    </div>

    <div v-if="loading" class="text-center">
      <p class="text-gray-600">Loading...</p>
    </div>

    <div v-else-if="foods.length === 0" class="text-center">
      <p class="text-gray-600">No foods found</p>
    </div>

    <div v-else class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 border-b text-left">Name</th>
            <th class="px-6 py-3 border-b text-left">Type</th>
            <th class="px-6 py-3 border-b text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="food in foods" :key="food.id" class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ food.name }}</td>
            <td class="px-6 py-4">{{ food.type }}</td>
            <td class="px-6 py-4 space-x-2">
              <router-link :to="`/admin/foods/${food.id}/edit`" class="text-blue-600 hover:underline">
                Edit
              </router-link>
              <button @click="deleteFood(food.id)" class="text-red-600 hover:underline">
                Delete
              </button>
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
  name: 'AdminFoods',
  setup() {
    const foods = ref([])
    const loading = ref(false)

    const fetchFoods = async () => {
      loading.value = true
      try {
        const response = await api.get('/api/foods')
        foods.value = response.data.data || response.data
      } catch (error) {
        console.error('Error fetching foods:', error)
      } finally {
        loading.value = false
      }
    }

    const deleteFood = async (id) => {
      if (confirm('Are you sure you want to delete this food?')) {
        try {
          await api.delete(`/api/foods/${id}`)
          foods.value = foods.value.filter(f => f.id !== id)
        } catch (error) {
          console.error('Error deleting food:', error)
        }
      }
    }

    onMounted(() => {
      fetchFoods()
    })

    return {
      foods,
      loading,
      deleteFood
    }
  }
}
</script>
