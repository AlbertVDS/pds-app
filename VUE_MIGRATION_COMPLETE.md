# Vue Migration & Web Routes Conversion

## Summary

Converted the pds-app from a traditional server-side rendered Blade application to a full Vue 3 + Vite single-page application (SPA) with comprehensive API routes.

## What Was Changed

### 1. Web Routes (`routes/web.php`)

**From:** Server-side Blade routes with mixed GET/POST handlers
**To:** RESTful API endpoints + Vue SPA fallback

#### Old Structure:

-   `GET /` → `home.blade.php`
-   `GET /login` → login form (Blade)
-   `POST /login` → AuthController
-   `GET /foods` → foods index (Blade)
-   `POST /foods` → food search (Blade)

#### New Structure:

```
API Routes (JSON responses):
├── Admin Routes (requiresAdmin middleware)
│   ├── /api/foods (CRUD)
│   ├── /api/recipes (CRUD)
│   ├── /api/users (CRUD)
│   ├── /api/mailings (CRUD)
│   ├── /api/translations (CRUD)
│   ├── /api/roles (CRUD)
│   └── /api/recipe-ingredients (CRUD)
├── Authentication
│   ├── POST /api/login
│   ├── POST /api/logout
│   ├── POST /api/register
│   └── GET /api/user
├── Autocomplete
│   ├── /api/food-autocomplete
│   ├── /api/area-autocomplete
│   ├── /api/category-autocomplete
│   ├── /api/food-type-autocomplete
│   ├── /api/ingredient-autocomplete
│   └── /api/tag-autocomplete
├── Public Data
│   ├── GET /api/foods
│   ├── GET /api/foods/{id}
│   ├── GET /api/recipes
│   └── GET /api/recipes/{id}
└── User-Specific
    ├── POST /api/user/settings
    ├── GET /api/user/favorite-recipes
    ├── POST /api/user/favorite-recipes
    └── DELETE /api/user/favorite-recipes/{id}

SPA Fallback:
└── GET /{any?} → app.blade.php (Vue SPA entry point)
```

### 2. Vue Router (`resources/js/router/index.js`)

Added 15+ new routes organized into sections:

#### User Routes:

-   `/` - Home page
-   `/login` - Login form
-   `/register` - Registration form
-   `/foods` - Browse foods
-   `/foods/:id` - Food details
-   `/recipes` - Browse recipes
-   `/recipes/:id` - Recipe details
-   `/profile` - User profile settings
-   `/favorite-recipes` - Favorite recipes management

#### Admin Routes (requiresAdmin guard):

-   `/admin/foods` - List foods
-   `/admin/foods/create` - Create food
-   `/admin/foods/:id/edit` - Edit food
-   `/admin/recipes` - List recipes
-   `/admin/recipes/create` - Create recipe
-   `/admin/recipes/:id/edit` - Edit recipe
-   `/admin/users` - List users
-   `/admin/users/create` - Create user
-   `/admin/users/:id/edit` - Edit user
-   `/admin/mailings` - List mailings
-   `/admin/mailings/create` - Create mailing
-   `/admin/mailings/:id/edit` - Edit mailing
-   `/admin/translations` - List translations
-   `/admin/translations/:language/edit` - Edit translations
-   `/admin/roles` - List roles
-   `/admin/recipe-ingredients` - List ingredients

### 3. Vue Components Created

#### Admin Components (15 files):

**Foods Management:**

-   `Admin/Foods/Index.vue` - List foods with delete
-   `Admin/Foods/Form.vue` - Create/edit food

**Recipes Management:**

-   `Admin/Recipes/Index.vue` - List recipes with delete
-   `Admin/Recipes/Form.vue` - Create/edit recipe

**Users Management:**

-   `Admin/Users/Index.vue` - List users with delete
-   `Admin/Users/Form.vue` - Create/edit user

**Mailings Management:**

-   `Admin/Mailings/Index.vue` - List mailings with delete
-   `Admin/Mailings/Form.vue` - Create/edit mailing

**Translations Management:**

-   `Admin/Translations/Index.vue` - List available languages
-   `Admin/Translations/Edit.vue` - Edit language translations

**Other Admin:**

-   `Admin/Roles/Index.vue` - List roles (read-only)
-   `Admin/RecipeIngredients/Index.vue` - List ingredients (read-only)

#### User Profile Component:

-   `Profile/FavoriteRecipes.vue` - Manage favorite recipes

### 4. Blade View Files

**No longer used (but still exist):**

-   `home.blade.php` - Home page
-   `foods/index.blade.php` - Food browsing
-   `foods/details.blade.php` - Food details
-   `foods/level.blade.php` - Food level details
-   `foods/contains.blade.php` - Food components
-   `recipes/index.blade.php` - Recipe browsing
-   `recipes/show.blade.php` - Recipe details
-   `profile/index.blade.php` - User profile
-   `profile/edit.blade.php` - Profile editing
-   `profile/favorite-recipes.blade.php` - Favorites
-   `users/index.blade.php` - User management (admin)
-   `users/edit.blade.php` - User editing (admin)
-   `mailing/index.blade.php` - Mailing management (admin)
-   `mailing/create-edit.blade.php` - Mailing form (admin)
-   `translations/index.blade.php` - Translation list (admin)
-   `translations/edit.blade.php` - Translation editing (admin)

These files are preserved for reference but no longer accessed.

## Key Architecture Changes

### Separation of Concerns

**Before:**

-   Controllers returned HTML views with embedded data
-   Server handled both routing AND rendering
-   Forms submitted to server endpoints
-   Page refresh on every action

**After:**

-   Controllers return JSON API responses
-   Vue handles all rendering on client
-   Axios makes asynchronous API calls
-   Single-page navigation without refreshes

### Authentication Flow

**Before:**

-   Session-based authentication
-   Redirect to login page on 403

**After:**

-   Token-based authentication (Sanctum)
-   API returns 401/403 status codes
-   Vue router redirects to login before request
-   Token stored in localStorage, sent with every request

### Admin Access Control

**Added to router:**

```javascript
meta: {
    requiresAdmin: true;
}
```

And navigation guard:

```javascript
if (to.meta.requiresAdmin && authStore.user && !authStore.user.isAdmin) {
    next("/"); // Redirect non-admins to home
}
```

## File Structure

```
resources/
├── js/
│   ├── pages/
│   │   ├── Admin/
│   │   │   ├── Foods/
│   │   │   │   ├── Index.vue
│   │   │   │   └── Form.vue
│   │   │   ├── Recipes/
│   │   │   ├── Users/
│   │   │   ├── Mailings/
│   │   │   ├── Translations/
│   │   │   ├── Roles/
│   │   │   └── RecipeIngredients/
│   │   ├── Profile/
│   │   │   ├── Index.vue
│   │   │   └── FavoriteRecipes.vue
│   │   ├── Auth/
│   │   │   ├── Login.vue
│   │   │   └── Register.vue
│   │   ├── Foods/
│   │   │   ├── Index.vue
│   │   │   └── Detail.vue
│   │   ├── Recipes/
│   │   │   ├── Index.vue
│   │   │   └── Detail.vue
│   │   ├── Home.vue
│   │   └── NotFound.vue
│   ├── router/
│   │   └── index.js (45+ routes)
│   ├── stores/
│   │   ├── auth.js
│   │   ├── foods.js
│   │   └── recipes.js
│   ├── services/
│   │   └── api.js (Axios instance)
│   ├── App.vue
│   └── app.js
└── views/
    ├── app.blade.php (SPA entry point)
    └── ... (old Blade files - archived)
```

## API Endpoint Reference

### Authentication Endpoints

```
POST   /api/login          → Login with credentials
POST   /api/register       → Register new user
POST   /api/logout         → Logout (requires auth)
GET    /api/user           → Get current user data
POST   /api/user/settings  → Update user profile
```

### Food Management (Admin)

```
GET    /api/foods          → List all foods
POST   /api/foods          → Create food
GET    /api/foods/{id}     → Get food details
PUT    /api/foods/{id}     → Update food
DELETE /api/foods/{id}     → Delete food
```

### Recipe Management (Admin)

```
GET    /api/recipes        → List all recipes
POST   /api/recipes        → Create recipe
GET    /api/recipes/{id}   → Get recipe details
PUT    /api/recipes/{id}   → Update recipe
DELETE /api/recipes/{id}   → Delete recipe
```

### User Management (Admin)

```
GET    /api/users          → List all users
POST   /api/users          → Create user
GET    /api/users/{id}     → Get user details
PUT    /api/users/{id}     → Update user
DELETE /api/users/{id}     → Delete user
```

### Mailing Management (Admin)

```
GET    /api/mailings       → List mailings
POST   /api/mailings       → Create mailing
GET    /api/mailings/{id}  → Get mailing details
PUT    /api/mailings/{id}  → Update mailing
DELETE /api/mailings/{id}  → Delete mailing
```

### Translations Management (Admin)

```
GET    /api/translations                     → List languages
GET    /api/translations/{language}          → Get language translations
PUT    /api/translations/{language}          → Update language
```

### Favorite Recipes (User)

```
GET    /api/user/favorite-recipes            → Get user's favorites
POST   /api/user/favorite-recipes            → Add to favorites
DELETE /api/user/favorite-recipes/{id}       → Remove from favorites
```

### Autocomplete Endpoints

```
GET    /api/food-autocomplete              → Autocomplete foods
GET    /api/area-autocomplete              → Autocomplete recipe areas
GET    /api/category-autocomplete          → Autocomplete recipe categories
GET    /api/food-type-autocomplete         → Autocomplete food types
GET    /api/ingredient-autocomplete        → Autocomplete ingredients
GET    /api/tag-autocomplete               → Autocomplete recipe tags
```

## Benefits of This Architecture

1. **Improved UX:** No page refreshes, instant feedback
2. **Better Performance:** Only data transferred, not HTML
3. **Scalability:** Same API can serve mobile apps, desktop clients
4. **Code Organization:** Clear separation between frontend and backend
5. **Developer Experience:** Hot module replacement during development
6. **Testability:** API endpoints easily testable with tools like Postman
7. **Type Safety:** Can add TypeScript in future for better development

## Migration Checklist

-   ✅ Routes converted to JSON API endpoints
-   ✅ Vue Router configured with all pages
-   ✅ Admin components created for all management pages
-   ✅ Authentication guard added to router
-   ✅ Admin-only routes protected
-   ✅ SPA fallback route configured
-   ⚠️ Controllers may need updating to return JSON instead of HTML
-   ⚠️ CORS middleware configuration (if needed)
-   ⚠️ API response formats may need adjustment

## Next Steps

1. **Update Controllers:** Ensure they return JSON responses
2. **Test API Endpoints:** Verify all endpoints work with Postman
3. **Test Authentication:** Verify token flow works correctly
4. **Test Admin Access:** Ensure requiresAdmin guard works
5. **Build & Deploy:** Run `npm run build` for production

## Running the Application

```bash
# Development
npm run dev        # Frontend dev server with HMR
php artisan serve  # Backend API server

# Production
npm run build       # Build Vue app
php artisan config:cache
php artisan optimize
```

## Notes

-   Blade files are preserved but no longer served directly
-   All user-facing content now served through Vue SPA
-   API responses should follow consistent JSON format
-   Consider adding pagination to list endpoints
-   File upload endpoints need multipart form handling in Axios
