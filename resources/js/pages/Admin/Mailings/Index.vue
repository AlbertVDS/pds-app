<template>
  <div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold">Manage Mailings</h1>
      <router-link to="/admin/mailings/create" class="bg-blue-600 text-white px-4 py-2 rounded">
        Create Mailing
      </router-link>
    </div>
    <div v-if="loading" class="text-center text-gray-600">Loading...</div>
    <div v-else-if="mailings.length === 0" class="text-center text-gray-600">No mailings found</div>
    <div v-else class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 border-b text-left">Title</th>
            <th class="px-6 py-3 border-b text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="mailing in mailings" :key="mailing.id" class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ mailing.title }}</td>
            <td class="px-6 py-4 space-x-2">
              <router-link :to="`/admin/mailings/${mailing.id}/edit`" class="text-blue-600 hover:underline">Edit</router-link>
              <button @click="deleteMailing(mailing.id)" class="text-red-600 hover:underline">Delete</button>
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
  name: 'AdminMailings',
  setup() {
    const mailings = ref([])
    const loading = ref(false)

    const fetchMailings = async () => {
      loading.value = true
      try {
        const response = await api.get('/api/mailings')
        mailings.value = response.data.data || response.data
      } catch (error) {
        console.error('Error fetching mailings:', error)
      } finally {
        loading.value = false
      }
    }

    const deleteMailing = async (id) => {
      if (confirm('Are you sure?')) {
        try {
          await api.delete(`/api/mailings/${id}`)
          mailings.value = mailings.value.filter(m => m.id !== id)
        } catch (error) {
          console.error('Error deleting mailing:', error)
        }
      }
    }

    onMounted(() => fetchMailings())

    return { mailings, loading, deleteMailing }
  }
}
</script>
