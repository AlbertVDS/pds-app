<template>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Manage Translations</h1>
    <div v-if="loading" class="text-center text-gray-600">Loading...</div>
    <div v-else-if="languages.length === 0" class="text-center text-gray-600">No languages found</div>
    <div v-else class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div v-for="language in languages" :key="language" class="bg-white border rounded p-6">
        <h2 class="text-xl font-bold mb-4">{{ language }}</h2>
        <router-link :to="`/admin/translations/${language}/edit`" class="bg-blue-600 text-white px-4 py-2 rounded">
          Edit
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import { api } from '../../../services/api'

export default {
  name: 'AdminTranslations',
  setup() {
    const languages = ref([])
    const loading = ref(false)

    const fetchLanguages = async () => {
      loading.value = true
      try {
        const response = await api.get('/api/translations')
        languages.value = response.data.data || response.data || ['en', 'es', 'nl']
      } catch (error) {
        console.error('Error fetching languages:', error)
      } finally {
        loading.value = false
      }
    }

    onMounted(() => fetchLanguages())

    return { languages, loading }
  }
}
</script>
