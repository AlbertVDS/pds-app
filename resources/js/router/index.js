import { createRouter, createWebHistory } from 'vue-router'
import { useAuthStore } from '../stores/auth'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: () => import('../pages/Home.vue'),
    meta: { requiresAuth: false }
  },
  {
    path: '/login',
    name: 'Login',
    component: () => import('../pages/Auth/Login.vue'),
    meta: { requiresAuth: false }
  },
  {
    path: '/register',
    name: 'Register',
    component: () => import('../pages/Auth/Register.vue'),
    meta: { requiresAuth: false }
  },
  {
    path: '/foods',
    name: 'Foods',
    component: () => import('../pages/Foods/Index.vue'),
    meta: { requiresAuth: true }
  },
  {
    path: '/foods/:id',
    name: 'FoodDetail',
    component: () => import('../pages/Foods/Detail.vue'),
    meta: { requiresAuth: true }
  },
  {
    path: '/recipes',
    name: 'Recipes',
    component: () => import('../pages/Recipes/Index.vue'),
    meta: { requiresAuth: true }
  },
  {
    path: '/recipes/:id',
    name: 'RecipeDetail',
    component: () => import('../pages/Recipes/Detail.vue'),
    meta: { requiresAuth: true }
  },
  {
    path: '/profile',
    name: 'Profile',
    component: () => import('../pages/Profile/Index.vue'),
    meta: { requiresAuth: true }
  },
  {
    path: '/favorite-recipes',
    name: 'FavoriteRecipes',
    component: () => import('../pages/Profile/FavoriteRecipes.vue'),
    meta: { requiresAuth: true }
  },
  // Admin Routes
  {
    path: '/admin',
    redirect: '/admin/foods'
  },
  {
    path: '/admin/foods',
    name: 'AdminFoods',
    component: () => import('../pages/Admin/Foods/Index.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/foods/create',
    name: 'AdminFoodCreate',
    component: () => import('../pages/Admin/Foods/Form.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/foods/:id/edit',
    name: 'AdminFoodEdit',
    component: () => import('../pages/Admin/Foods/Form.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/recipes',
    name: 'AdminRecipes',
    component: () => import('../pages/Admin/Recipes/Index.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/recipes/create',
    name: 'AdminRecipeCreate',
    component: () => import('../pages/Admin/Recipes/Form.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/recipes/:id/edit',
    name: 'AdminRecipeEdit',
    component: () => import('../pages/Admin/Recipes/Form.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/users',
    name: 'AdminUsers',
    component: () => import('../pages/Admin/Users/Index.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/users/create',
    name: 'AdminUserCreate',
    component: () => import('../pages/Admin/Users/Form.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/users/:id/edit',
    name: 'AdminUserEdit',
    component: () => import('../pages/Admin/Users/Form.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/mailings',
    name: 'AdminMailings',
    component: () => import('../pages/Admin/Mailings/Index.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/mailings/create',
    name: 'AdminMailingCreate',
    component: () => import('../pages/Admin/Mailings/Form.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/mailings/:id/edit',
    name: 'AdminMailingEdit',
    component: () => import('../pages/Admin/Mailings/Form.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/translations',
    name: 'AdminTranslations',
    component: () => import('../pages/Admin/Translations/Index.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/translations/:language/edit',
    name: 'AdminTranslationEdit',
    component: () => import('../pages/Admin/Translations/Edit.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/roles',
    name: 'AdminRoles',
    component: () => import('../pages/Admin/Roles/Index.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/admin/recipe-ingredients',
    name: 'AdminRecipeIngredients',
    component: () => import('../pages/Admin/RecipeIngredients/Index.vue'),
    meta: { requiresAuth: true, requiresAdmin: true }
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: () => import('../pages/NotFound.vue')
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

// Navigation guard for authentication
router.beforeEach((to, from, next) => {
  const authStore = useAuthStore()
  
  if (to.meta.requiresAuth && !authStore.isAuthenticated) {
    next('/login')
  } else if ((to.name === 'Login' || to.name === 'Register') && authStore.isAuthenticated) {
    next('/')
  } else if (to.meta.requiresAdmin && authStore.user && !authStore.user.isAdmin) {
    next('/')
  } else {
    next()
  }
})

export default router
