import axios from 'axios'

// Determine API base URL:
// - In development (Vite) use the Laravel server at http://localhost:8000
// - In production use the current origin + /api
const isViteDev = typeof import.meta !== 'undefined' && import.meta.env && import.meta.env.DEV

// During Vite development we use a relative `/api` path so the Vite dev server
// can proxy requests to the backend (works well with DDEV). In production use
// the current origin + /api.
const apiBase = isViteDev ? '/api' : `${window.location.origin}/api`

const api = axios.create({
  baseURL: apiBase,
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
})

// Add request interceptor
api.interceptors.request.use(
  config => {
    const token = localStorage.getItem('auth_token')
    if (token) {
      config.headers.Authorization = `Bearer ${token}`
    }
    return config
  },
  error => Promise.reject(error)
)

// Add response interceptor
api.interceptors.response.use(
  response => response,
  error => {
    if (error.response?.status === 401) {
      localStorage.removeItem('auth_token')
      window.location.href = '/login'
    }
    return Promise.reject(error)
  }
)

export default api
