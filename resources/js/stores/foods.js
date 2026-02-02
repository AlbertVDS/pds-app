import { defineStore } from 'pinia'
import { ref } from 'vue'
import api from '../services/api'

export const useFoodsStore = defineStore('foods', () => {
  const foods = ref([])
  const currentFood = ref(null)
  const loading = ref(false)
  const error = ref(null)

  const fetchFoods = async (params = {}) => {
    loading.value = true
    error.value = null
    try {
      const response = await api.get('/foods', { params })
      console.log('API Response:', response.data)
      // Handle paginated response from Laravel
      foods.value = Array.isArray(response.data) ? response.data : (response.data.data || [])
      console.log('Foods after assignment:', foods.value)
      return true
    } catch (err) {
      error.value = err.message
      console.error('Failed to fetch foods:', err)
      foods.value = []
      return false
    } finally {
      loading.value = false
    }
  }

  const getFoodById = async (id) => {
    loading.value = true
    error.value = null
    try {
      const response = await api.get(`/foods/${id}`)
      currentFood.value = response.data.data || response.data
      return true
    } catch (err) {
      error.value = err.message
      console.error('Failed to fetch food:', err)
      return false
    } finally {
      loading.value = false
    }
  }

  const searchFoods = async (query) => {
    return fetchFoods({ search: query })
  }

  return {
    foods,
    currentFood,
    loading,
    error,
    fetchFoods,
    getFoodById,
    searchFoods
  }
})
