import { defineStore } from 'pinia'
import { ref, computed } from 'vue'
import api from '../services/api'

export const useAuthStore = defineStore('auth', () => {
  const user = ref(null)
  const token = ref(localStorage.getItem('auth_token'))

  const isAuthenticated = computed(() => !!token.value)

  const login = async (email, password) => {
    try {
      const response = await api.post('/login', { email, password })
      token.value = response.data.token
      user.value = response.data.user
      localStorage.setItem('auth_token', token.value)
      api.defaults.headers.common['Authorization'] = `Bearer ${token.value}`
      return true
    } catch (error) {
      console.error('Login failed:', error)
      return false
    }
  }

  const register = async (name, email, password) => {
    try {
      // include password_confirmation to satisfy backend validation expecting 'confirmed'
      const payload = { name, email, password, password_confirmation: password }
      const response = await api.post('/register', payload)
      token.value = response.data.token
      user.value = response.data.user
      localStorage.setItem('auth_token', token.value)
      api.defaults.headers.common['Authorization'] = `Bearer ${token.value}`
      return true
    } catch (error) {
      console.error('Registration failed:', error)
      return false
    }
  }

  const logout = async () => {
    try {
      // Attempt to notify backend to invalidate token/session
      await api.post('/logout')
    } catch (error) {
      // Ignore errors — still clear local state
      console.warn('API logout failed, clearing local session anyway.', error)
    } finally {
      user.value = null
      token.value = null
      localStorage.removeItem('auth_token')
      delete api.defaults.headers.common['Authorization']
    }
  }

  const fetchUser = async () => {
    try {
      const response = await api.get('/user')
      user.value = response.data
      return true
    } catch (error) {
      console.error('Failed to fetch user:', error)
      logout()
      return false
    }
  }

  // Initialize token if exists
  if (token.value) {
    api.defaults.headers.common['Authorization'] = `Bearer ${token.value}`
  }

  return {
    user,
    token,
    isAuthenticated,
    login,
    register,
    logout,
    fetchUser
  }
})
