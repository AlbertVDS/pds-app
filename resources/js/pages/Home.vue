<template>
  <div class="text-center py-12">
    <h1 class="text-4xl font-bold text-gray-900 mb-4">
      Welcome to PDS-App
    </h1>
    <p class="text-xl text-gray-600 mb-8">
      A supportive application for people with IBS to manage their diet
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
      <div class="bg-white p-8 rounded-lg shadow-md">
        <div class="text-4xl mb-4">🍎</div>
        <h3 class="text-xl font-semibold mb-2">Food Database</h3>
        <p class="text-gray-600">
          Search and check if foods are safe, limited, or should be avoided
        </p>
        <RouterLink to="/foods" class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">
          Browse Foods →
        </RouterLink>
      </div>

      <div class="bg-white p-8 rounded-lg shadow-md">
        <div class="text-4xl mb-4">👨‍🍳</div>
        <h3 class="text-xl font-semibold mb-2">IBS-Friendly Recipes</h3>
        <p class="text-gray-600">
          Discover recipes with automatic ingredient substitutions
        </p>
        <RouterLink to="/recipes" class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">
          Find Recipes →
        </RouterLink>
      </div>

      <div class="bg-white p-8 rounded-lg shadow-md">
        <div class="text-4xl mb-4">⚙️</div>
        <h3 class="text-xl font-semibold mb-2">Personalized Settings</h3>
        <p class="text-gray-600">
          Set your FODMAP tolerances and language preferences
        </p>
        <RouterLink to="/profile" class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">
          Go to Profile →
        </RouterLink>
      </div>
    </div>

    <div class="mt-12 bg-blue-50 p-8 rounded-lg">
      <h3 class="text-2xl font-semibold text-blue-900 mb-4">About IBS</h3>
      <p class="text-blue-800 max-w-2xl mx-auto">
        IBS (Irritable Bowel Syndrome) can make food choices stressful. PDS-App helps you make safe, 
        confident decisions about what to eat by providing a comprehensive food database, FODMAP information, 
        and IBS-friendly recipes with smart alternatives.
      </p>
    </div>
  </div>
</template>

<script setup>
import { RouterLink } from 'vue-router'
</script>
