<template>
  <div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold">Manage Roles</h1>
    </div>
    <div v-if="loading" class="text-center text-gray-600">Loading...</div>
    <div v-else-if="roles.length === 0" class="text-center text-gray-600">No roles found</div>
    <div v-else class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 border-b text-left">Name</th>
            <th class="px-6 py-3 border-b text-left">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="role in roles" :key="role.id" class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ role.name }}</td>
            <td class="px-6 py-4">{{ role.description }}</td>
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
  name: 'AdminRoles',
  setup() {
    const roles = ref([])
    const loading = ref(false)

    const fetchRoles = async () => {
      loading.value = true
      try {
        const response = await api.get('/api/roles')
        roles.value = response.data.data || response.data
      } catch (error) {
        console.error('Error fetching roles:', error)
      } finally {
        loading.value = false
      }
    }

    onMounted(() => fetchRoles())

    return { roles, loading }
  }
}
</script>
