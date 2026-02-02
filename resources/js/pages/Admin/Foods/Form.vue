<template>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">{{ isEdit ? 'Edit Food' : 'Create Food' }}</h1>
    <form @submit.prevent="saveFood" class="max-w-2xl">
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Name</label>
        <input v-model="form.name" type="text" class="w-full px-4 py-2 border rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Type</label>
        <input v-model="form.type" type="text" class="w-full px-4 py-2 border rounded">
      </div>
      <div class="flex gap-2">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
          {{ isEdit ? 'Update' : 'Create' }}
        </button>
        <router-link to="/admin/foods" class="bg-gray-600 text-white px-4 py-2 rounded">
          Cancel
        </router-link>
      </div>
    </form>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import { api } from '../../../services/api'

export default {
  name: 'AdminFoodForm',
  setup() {
    const route = useRoute()
    const router = useRouter()
    const form = ref({ name: '', type: '' })
    const isEdit = ref(false)

    const saveFood = async () => {
      try {
        if (isEdit.value) {
          await api.put(`/api/foods/${route.params.id}`, form.value)
        } else {
          await api.post('/api/foods', form.value)
        }
        router.push('/admin/foods')
      } catch (error) {
        console.error('Error saving food:', error)
      }
    }

    onMounted(async () => {
      if (route.params.id) {
        isEdit.value = true
        try {
          const response = await api.get(`/api/foods/${route.params.id}`)
          form.value = response.data.data || response.data
        } catch (error) {
          console.error('Error fetching food:', error)
        }
      }
    })

    return {
      form,
      isEdit,
      saveFood
    }
  }
}
</script>
