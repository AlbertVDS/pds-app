<template>
  <div class="text-center py-12">
    <h1 class="text-4xl font-bold text-gray-900 mb-4">404 - Page Not Found</h1>
    <p class="text-lg text-gray-600 mb-8">The page you're looking for doesn't exist.</p>
    <RouterLink to="/" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition">
      Go to Home
    </RouterLink>
  </div>
</template>

<script setup>
import { RouterLink } from 'vue-router'
</script>
