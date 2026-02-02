<template>
  <div id="app" class="min-h-screen bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex items-center">
            <RouterLink to="/" class="text-2xl font-bold text-green-600">
              🍎 PDS-App
            </RouterLink>
          </div>
          <div class="hidden md:flex items-center space-x-8">
            <template v-if="authStore.isAuthenticated">
              <RouterLink to="/foods" class="text-gray-700 hover:text-green-600 transition">
                Foods
              </RouterLink>
              <RouterLink to="/recipes" class="text-gray-700 hover:text-green-600 transition">
                Recipes
              </RouterLink>
              <RouterLink to="/profile" class="text-gray-700 hover:text-green-600 transition">
                Profile
              </RouterLink>
              <button @click="logout" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition">
                Logout
              </button>
            </template>
            <template v-else>
              <RouterLink to="/login" class="text-gray-700 hover:text-green-600 transition">
                Login
              </RouterLink>
              <RouterLink to="/register" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition">
                Register
              </RouterLink>
            </template>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <RouterView />
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-center">
        <p>&copy; 2025 PDS-App. Supporting IBS dietary management.</p>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { RouterLink, RouterView, useRouter } from 'vue-router'
import { useAuthStore } from './stores/auth'

const router = useRouter()
const authStore = useAuthStore()

const logout = async () => {
  await authStore.logout()
  router.push('/login')
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

* {
  font-family: 'Inter', sans-serif;
}
</style>
