<template>
  <div>
    <div class="mb-8">
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Foods</h1>
      
      <div class="flex flex-col md:flex-row gap-4">
        <input
          v-model="searchQuery"
          type="text"
          placeholder="Search foods..."
          class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
          @keyup.enter="handleSearch"
        />
        <button
          @click="handleSearch"
          class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition"
        >
          Search
        </button>
      </div>
    </div>

    <div v-if="loading" class="text-center py-8">
      <p class="text-gray-600">Loading foods...</p>
    </div>

    <div v-else-if="error" class="p-4 bg-red-50 text-red-700 rounded-lg">
      {{ error }}
    </div>

    <div v-else-if="foods.length === 0" class="text-center py-8">
      <p class="text-gray-600">No foods found. Try a different search.</p>
    </div>

    <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <RouterLink
        v-for="food in foods"
        :key="food.id"
        :to="`/foods/${food.id}`"
        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition cursor-pointer"
      >
        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ food.name }}</h3>
        <div class="space-y-2 text-sm text-gray-600">
          <div v-if="food.foodType" class="flex items-center">
            <span class="font-medium">Type:</span>
            <span class="ml-2">{{ food.foodType.name }}</span>
          </div>
          <div class="flex items-center gap-4">
            <div v-if="food.fructose" class="inline-block bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">
              Fructose
            </div>
            <div v-if="food.lactose" class="inline-block bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">
              Lactose
            </div>
            <div v-if="food.fructan" class="inline-block bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">
              Fructan
            </div>
          </div>
        </div>
      </RouterLink>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { RouterLink } from 'vue-router'
import { useFoodsStore } from '../../stores/foods'

const foodsStore = useFoodsStore()
const searchQuery = ref('')

const foods = ref(foodsStore.foods)
const loading = ref(foodsStore.loading)
const error = ref(foodsStore.error)

onMounted(() => {
  foodsStore.fetchFoods()
})

const handleSearch = () => {
  if (searchQuery.value.trim()) {
    foodsStore.searchFoods(searchQuery.value)
  } else {
    foodsStore.fetchFoods()
  }
}
</script>
