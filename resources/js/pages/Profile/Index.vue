<template>
  <div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-900 mb-8">User Profile</h1>

    <div v-if="!user" class="text-center py-8">
      <p class="text-gray-600">Please log in to view your profile.</p>
    </div>

    <div v-else class="space-y-6">
      <!-- User Information -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Account Information</h3>
        <div class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <p class="mt-1 text-gray-900">{{ user.name }}</p>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <p class="mt-1 text-gray-900">{{ user.email }}</p>
          </div>
          <div v-if="user.language_id">
            <label class="block text-sm font-medium text-gray-700">Language</label>
            <p class="mt-1 text-gray-900">{{ user.language_id }}</p>
          </div>
        </div>
      </div>

      <!-- FODMAP Settings -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">FODMAP Tolerances</h3>
        <p class="text-gray-600 mb-4">Configure your FODMAP sensitivities below:</p>
        
        <div class="space-y-4">
          <div class="flex items-center">
            <input id="fructose" type="checkbox" v-model="fodmaps.fructose" class="rounded">
            <label for="fructose" class="ml-2 text-gray-700">Sensitive to Fructose</label>
          </div>
          <div class="flex items-center">
            <input id="lactose" type="checkbox" v-model="fodmaps.lactose" class="rounded">
            <label for="lactose" class="ml-2 text-gray-700">Sensitive to Lactose</label>
          </div>
          <div class="flex items-center">
            <input id="mannitol" type="checkbox" v-model="fodmaps.mannitol" class="rounded">
            <label for="mannitol" class="ml-2 text-gray-700">Sensitive to Mannitol</label>
          </div>
          <div class="flex items-center">
            <input id="sorbitol" type="checkbox" v-model="fodmaps.sorbitol" class="rounded">
            <label for="sorbitol" class="ml-2 text-gray-700">Sensitive to Sorbitol</label>
          </div>
          <div class="flex items-center">
            <input id="fructan" type="checkbox" v-model="fodmaps.fructan" class="rounded">
            <label for="fructan" class="ml-2 text-gray-700">Sensitive to Fructan</label>
          </div>
          <div class="flex items-center">
            <input id="gos" type="checkbox" v-model="fodmaps.GOS" class="rounded">
            <label for="gos" class="ml-2 text-gray-700">Sensitive to GOS</label>
          </div>
        </div>

        <button
          @click="saveFodmaps"
          :disabled="saving"
          class="mt-6 bg-green-600 hover:bg-green-700 disabled:bg-gray-400 text-white font-semibold py-2 px-6 rounded-lg transition"
        >
          {{ saving ? 'Saving...' : 'Save FODMAP Settings' }}
        </button>
      </div>

      <!-- Language Settings -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Language</h3>
        <div>
          <label for="language" class="block text-sm font-medium text-gray-700">Preferred Language</label>
          <select
            id="language"
            v-model="language"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500"
          >
            <option value="en">English</option>
            <option value="es">Spanish</option>
            <option value="nl">Dutch</option>
          </select>
        </div>
        <button
          @click="saveLanguage"
          :disabled="saving"
          class="mt-4 bg-green-600 hover:bg-green-700 disabled:bg-gray-400 text-white font-semibold py-2 px-6 rounded-lg transition"
        >
          {{ saving ? 'Saving...' : 'Save Language' }}
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useAuthStore } from '../../stores/auth'

const authStore = useAuthStore()
const user = computed(() => authStore.user)

const fodmaps = ref({
  fructose: false,
  lactose: false,
  mannitol: false,
  sorbitol: false,
  fructan: false,
  GOS: false
})

const language = ref('en')
const saving = ref(false)

const saveFodmaps = async () => {
  saving.value = true
  // TODO: Implement API call to save FODMAP settings
  console.log('Saving FODMAP settings:', fodmaps.value)
  saving.value = false
}

const saveLanguage = async () => {
  saving.value = true
  // TODO: Implement API call to save language
  console.log('Saving language:', language.value)
  saving.value = false
}
</script>
