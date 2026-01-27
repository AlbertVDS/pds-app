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
      const response = await api.get('/api/foods', { params })
      foods.value = response.data.data || response.data
      return true
    } catch (err) {
      error.value = err.message
      console.error('Failed to fetch foods:', err)
      return false
    } finally {
      loading.value = false
    }
  }

  const getFoodById = async (id) => {
    loading.value = true
    error.value = null
    try {
      const response = await api.get(`/api/foods/${id}`)
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
