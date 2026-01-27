<template>
  <div>
    <RouterLink to="/foods" class="text-green-600 hover:text-green-700 font-semibold mb-6 inline-block">
      ← Back to Foods
    </RouterLink>

    <div v-if="loading" class="text-center py-8">
      <p class="text-gray-600">Loading food details...</p>
    </div>

    <div v-else-if="error" class="p-4 bg-red-50 text-red-700 rounded-lg">
      {{ error }}
    </div>

    <div v-else-if="food" class="bg-white rounded-lg shadow-lg p-8">
      <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ food.name }}</h1>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4">FODMAP Information</h3>
          <div class="space-y-2">
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-medium">Fructose:</span>
              <span :class="food.fructose ? 'text-red-600 font-bold' : 'text-green-600'">
                {{ food.fructose ? 'High' : 'Low' }}
              </span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-medium">Lactose:</span>
              <span :class="food.lactose ? 'text-red-600 font-bold' : 'text-green-600'">
                {{ food.lactose ? 'High' : 'Low' }}
              </span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-medium">Mannitol:</span>
              <span :class="food.mannitol ? 'text-red-600 font-bold' : 'text-green-600'">
                {{ food.mannitol ? 'High' : 'Low' }}
              </span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-medium">Sorbitol:</span>
              <span :class="food.sorbitol ? 'text-red-600 font-bold' : 'text-green-600'">
                {{ food.sorbitol ? 'High' : 'Low' }}
              </span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-medium">Fructan:</span>
              <span :class="food.fructan ? 'text-red-600 font-bold' : 'text-green-600'">
                {{ food.fructan ? 'High' : 'Low' }}
              </span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-medium">GOS:</span>
              <span :class="food.GOS ? 'text-red-600 font-bold' : 'text-green-600'">
                {{ food.GOS ? 'High' : 'Low' }}
              </span>
            </div>
          </div>
        </div>

        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4">Food Type</h3>
          <p v-if="food.foodType" class="text-gray-600 mb-4">{{ food.foodType.name }}</p>

          <h3 class="text-lg font-semibold text-gray-900 mb-4">Summary</h3>
          <div class="p-4 bg-blue-50 rounded-lg">
            <p v-if="hasFodmaps" class="text-blue-900">
              ⚠️ This food contains high FODMAP components. Consider checking with your dietician.
            </p>
            <p v-else class="text-green-900">
              ✓ This food appears to be low FODMAP.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div v-else class="text-center py-8">
      <p class="text-gray-600">Food not found.</p>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { RouterLink } from 'vue-router'
import { useFoodsStore } from '../../stores/foods'

const route = useRoute()
const foodsStore = useFoodsStore()

const food = ref(foodsStore.currentFood)
const loading = ref(foodsStore.loading)
const error = ref(foodsStore.error)

const hasFodmaps = computed(() => {
  if (!food.value) return false
  return food.value.fructose || food.value.lactose || food.value.mannitol || 
         food.value.sorbitol || food.value.fructan || food.value.GOS
})

onMounted(() => {
  foodsStore.getFoodById(route.params.id)
})
</script>
