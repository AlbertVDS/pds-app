import { defineStore } from 'pinia'
import { ref } from 'vue'
import api from '../services/api'

export const useRecipesStore = defineStore('recipes', () => {
  const recipes = ref([])
  const currentRecipe = ref(null)
  const loading = ref(false)
  const error = ref(null)

  const fetchRecipes = async (params = {}) => {
    loading.value = true
    error.value = null
    try {
      const response = await api.get('/api/recipes', { params })
      recipes.value = response.data.data || response.data
      return true
    } catch (err) {
      error.value = err.message
      console.error('Failed to fetch recipes:', err)
      return false
    } finally {
      loading.value = false
    }
  }

  const getRecipeById = async (id) => {
    loading.value = true
    error.value = null
    try {
      const response = await api.get(`/api/recipes/${id}`)
      currentRecipe.value = response.data.data || response.data
      return true
    } catch (err) {
      error.value = err.message
      console.error('Failed to fetch recipe:', err)
      return false
    } finally {
      loading.value = false
    }
  }

  const searchRecipes = async (query) => {
    return fetchRecipes({ search: query })
  }

  return {
    recipes,
    currentRecipe,
    loading,
    error,
    fetchRecipes,
    getRecipeById,
    searchRecipes
  }
})
