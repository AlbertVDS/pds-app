# Vue 3 Frontend Setup Guide

Your PDS-App now includes a modern Vue 3 + Vite frontend! This guide will help you get started.

## Project Structure

```
resources/
├── css/
│   └── app.css                 # Tailwind CSS
├── js/
│   ├── App.vue                 # Root Vue component
│   ├── app.js                  # Vue app entry point
│   ├── router/
│   │   └── index.js            # Vue Router configuration
│   ├── stores/
│   │   ├── auth.js             # Authentication store (Pinia)
│   │   ├── foods.js            # Foods data store
│   │   └── recipes.js          # Recipes data store
│   ├── services/
│   │   └── api.js              # Axios API client
│   └── pages/
│       ├── Home.vue
│       ├── Auth/
│       │   ├── Login.vue
│       │   └── Register.vue
│       ├── Foods/
│       │   ├── Index.vue
│       │   └── Detail.vue
│       ├── Recipes/
│       │   ├── Index.vue
│       │   └── Detail.vue
│       ├── Profile/
│       │   └── Index.vue
│       └── NotFound.vue
└── views/
    └── app.blade.php           # Laravel blade template
```

## Installation & Setup

### 1. Install Dependencies

```bash
npm install
```

### 2. Development Server

Start the Vue dev server alongside Laravel:

```bash
# Terminal 1: Start Vite dev server
npm run dev

# Terminal 2: Start Laravel dev server
php artisan serve
```

The app will be available at `http://localhost:8000`

### 3. Build for Production

```bash
npm run build
```

This creates optimized assets in `public/build/`.

## Key Features

### 🔐 Authentication System

-   **Store**: `stores/auth.js` (Pinia)
-   Login and registration pages
-   Token-based authentication with Sanctum
-   Automatic token management
-   Protected routes with navigation guards

### 🥗 Food Management

-   Browse and search foods
-   FODMAP indicators
-   Food detail pages showing all FODMAP levels
-   Integrated with your Laravel API

### 👨‍🍳 Recipe Management

-   Browse and search recipes
-   Recipe details with ingredients and instructions
-   Cuisine type information
-   IBS-friendly recipe suggestions

### 👤 User Profile

-   User account information
-   FODMAP sensitivity configuration
-   Language preferences
-   Settings management

### 🎨 UI/UX

-   Tailwind CSS for styling
-   Responsive design (mobile-first)
-   Green color scheme matching IBS theme
-   Loading states and error handling

## Technologies Used

-   **Vue 3**: Modern reactive JavaScript framework
-   **Vue Router 4**: Client-side routing
-   **Pinia**: State management (replacement for Vuex)
-   **Vite**: Next-gen build tool
-   **Axios**: HTTP client
-   **Tailwind CSS**: Utility-first CSS framework
-   **Sanctum**: Laravel authentication API

## API Integration

The frontend communicates with your Laravel backend via:

**Base URL**: `http://localhost:8000/api`

### Authenticated Endpoints

```
GET  /api/foods              # List foods
GET  /api/foods/:id          # Get food details
GET  /api/recipes            # List recipes
GET  /api/recipes/:id        # Get recipe details
GET  /api/user               # Get current user
```

### Authentication Endpoints

```
POST /api/login              # Login user
POST /api/register           # Register new user
POST /api/logout             # Logout user
```

## State Management (Pinia)

### Auth Store

```javascript
import { useAuthStore } from "@/stores/auth";

const auth = useAuthStore();
auth.login(email, password);
auth.register(name, email, password);
auth.logout();
auth.user; // Current user object
auth.isAuthenticated; // Boolean
```

### Foods Store

```javascript
import { useFoodsStore } from "@/stores/foods";

const foods = useFoodsStore();
foods.fetchFoods();
foods.getFoodById(id);
foods.searchFoods(query);
foods.foods; // Array of foods
foods.currentFood; // Single food
foods.loading; // Loading state
foods.error; // Error message
```

### Recipes Store

```javascript
import { useRecipesStore } from "@/stores/recipes";

const recipes = useRecipesStore();
recipes.fetchRecipes();
recipes.getRecipeById(id);
recipes.searchRecipes(query);
recipes.recipes; // Array of recipes
recipes.currentRecipe; // Single recipe
recipes.loading; // Loading state
recipes.error; // Error message
```

## Routing

The app uses Vue Router for client-side routing:

| Path           | Component      | Auth Required |
| -------------- | -------------- | ------------- |
| `/`            | Home           | No            |
| `/login`       | Login          | No            |
| `/register`    | Register       | No            |
| `/foods`       | Foods List     | Yes           |
| `/foods/:id`   | Food Details   | Yes           |
| `/recipes`     | Recipes List   | Yes           |
| `/recipes/:id` | Recipe Details | Yes           |
| `/profile`     | User Profile   | Yes           |

### Navigation Guards

Routes with `meta: { requiresAuth: true }` require authentication. Users are redirected to `/login` if not authenticated.

## Environment Configuration

Create a `.env` file in your Laravel root:

```env
VITE_API_BASE_URL=http://localhost:8000
```

## Common Tasks

### Adding a New Page

1. Create component in `resources/js/pages/MyPage.vue`
2. Add route in `resources/js/router/index.js`
3. Link from navigation in `resources/js/App.vue`

### Modifying Stores

Edit files in `resources/js/stores/` to add new state, getters, or actions.

### Styling

-   Global styles: `resources/css/app.css`
-   Component styles: Use `<style scoped>` in Vue files
-   Tailwind classes: Use utility classes in templates

### API Calls

The `resources/js/services/api.js` handles all HTTP requests with:

-   Automatic token injection
-   Response interceptors
-   Error handling

## Troubleshooting

### Hot Module Replacement (HMR) not working

-   Ensure Vite dev server is running
-   Check that Vite port (default 5173) is accessible

### Tailwind styles not applying

-   Run `npm run build` for production builds
-   In dev mode, ensure Vite is running

### API requests failing with 401

-   Check authentication token in localStorage
-   Verify Sanctum middleware is configured in Laravel
-   Check CORS configuration

### Router not working

-   Ensure `APP_URL` is set correctly in `.env`
-   Check that routes are properly defined in `router/index.js`

## Next Steps

1. **Connect to your Laravel backend**:

    - Update API endpoints in stores
    - Ensure Laravel routes match expected endpoints
    - Configure CORS if needed

2. **Add more features**:

    - Favorite foods/recipes
    - Mailing list subscription
    - Advanced filtering
    - Social sharing

3. **Improve UX**:

    - Add loading skeletons
    - Add toast notifications
    - Implement offline mode
    - Add PWA support

4. **Performance**:
    - Code splitting
    - Lazy loading routes
    - Image optimization
    - Service workers

## Resources

-   [Vue 3 Documentation](https://vuejs.org/)
-   [Vue Router Guide](https://router.vuejs.org/)
-   [Pinia Documentation](https://pinia.vuejs.org/)
-   [Vite Guide](https://vitejs.dev/)
-   [Tailwind CSS](https://tailwindcss.com/)
-   [Axios Documentation](https://axios-http.com/)

---

**Last Updated**: January 27, 2025
