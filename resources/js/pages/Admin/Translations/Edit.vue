<template>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Edit Translations - {{ language }}</h1>
    <form @submit.prevent="saveTranslations" class="max-w-4xl">
      <div v-for="(value, key) in translations" :key="key" class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">{{ key }}</label>
        <textarea v-model="translations[key]" class="w-full px-4 py-2 border rounded" rows="2"></textarea>
      </div>
      <div class="flex gap-2">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
        <router-link to="/admin/translations" class="bg-gray-600 text-white px-4 py-2 rounded">Cancel</router-link>
      </div>
    </form>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import { api } from '../../../services/api'

export default {
  name: 'AdminTranslationEdit',
  setup() {
    const route = useRoute()
    const router = useRouter()
    const language = ref('')
    const translations = ref({})

    const saveTranslations = async () => {
      try {
        await api.put(`/api/translations/${route.params.language}`, translations.value)
        router.push('/admin/translations')
      } catch (error) {
        console.error('Error saving translations:', error)
      }
    }

    onMounted(async () => {
      language.value = route.params.language
      try {
        const response = await api.get(`/api/translations/${language.value}`)
        translations.value = response.data.data || response.data
      } catch (error) {
        console.error('Error fetching translations:', error)
      }
    })

    return { language, translations, saveTranslations }
  }
}
</script>
