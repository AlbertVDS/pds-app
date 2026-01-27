<template>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">{{ isEdit ? 'Edit User' : 'Create User' }}</h1>
    <form @submit.prevent="saveUser" class="max-w-2xl">
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Name</label>
        <input v-model="form.name" type="text" class="w-full px-4 py-2 border rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Email</label>
        <input v-model="form.email" type="email" class="w-full px-4 py-2 border rounded" required>
      </div>
      <div v-if="!isEdit" class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Password</label>
        <input v-model="form.password" type="password" class="w-full px-4 py-2 border rounded" required>
      </div>
      <div class="flex gap-2">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
          {{ isEdit ? 'Update' : 'Create' }}
        </button>
        <router-link to="/admin/users" class="bg-gray-600 text-white px-4 py-2 rounded">Cancel</router-link>
      </div>
    </form>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import { api } from '../../../services/api'

export default {
  name: 'AdminUserForm',
  setup() {
    const route = useRoute()
    const router = useRouter()
    const form = ref({ name: '', email: '', password: '' })
    const isEdit = ref(false)

    const saveUser = async () => {
      try {
        if (isEdit.value) {
          await api.put(`/api/users/${route.params.id}`, form.value)
        } else {
          await api.post('/api/users', form.value)
        }
        router.push('/admin/users')
      } catch (error) {
        console.error('Error saving user:', error)
      }
    }

    onMounted(async () => {
      if (route.params.id) {
        isEdit.value = true
        try {
          const response = await api.get(`/api/users/${route.params.id}`)
          form.value = response.data.data || response.data
          delete form.value.password
        } catch (error) {
          console.error('Error fetching user:', error)
        }
      }
    })

    return { form, isEdit, saveUser }
  }
}
</script>
