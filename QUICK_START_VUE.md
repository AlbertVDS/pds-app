# Quick Start - Vue Migration

## What Changed?

Your Laravel app is now a **Vue 3 Single Page Application (SPA)**. No more Blade templates for user-facing pages!

## Architecture Overview

```
┌─────────────────┐
│  Vue 3 Frontend │  (Runs in browser)
│  - Components   │
│  - Router       │
│  - Stores (Pinia)
└────────┬────────┘
         │ Axios API calls (JSON)
         ▼
┌─────────────────┐
│  Laravel API    │  (REST endpoints)
│  - Controllers  │
│  - Models       │
│  - Database     │
└─────────────────┘
```

## Start Development

### Terminal 1 - Run Frontend Dev Server

```bash
cd /home/albert/Projects/recode/pds-app
npm install  # (if not already installed)
npm run dev
```

This starts Vite dev server at `http://localhost:5173` with hot module replacement (HMR).

### Terminal 2 - Run Laravel Backend

```bash
cd /home/albert/Projects/recode/pds-app
php artisan serve
```

Backend runs at `http://localhost:8000`.

### Browser

Open `http://localhost:5173` and interact with the app.

The frontend automatically proxies API calls to `http://localhost:8000/api/*`.

## Routes Map

### User Routes (No Auth Required)

```
/              Home page
/login         Login form
/register      Registration form
/foods         Browse all foods
/foods/:id     Food details with FODMAP info
/recipes       Browse all recipes
/recipes/:id   Recipe details with ingredients
```

### Protected Routes (Must be logged in)

```
/profile              User settings & FODMAP preferences
/favorite-recipes     Manage favorite recipes
```

### Admin Routes (Must be admin user)

```
/admin/foods                 Manage foods (list, create, edit, delete)
/admin/recipes               Manage recipes
/admin/users                 Manage users
/admin/mailings              Manage email campaigns
/admin/translations          Edit language translations
/admin/roles                 View user roles
/admin/recipe-ingredients    View recipe ingredients
```

## API Endpoints

### Authentication

```
POST /api/login              Login
POST /api/register           Register
POST /api/logout             Logout
GET /api/user                Get current user
```

### Foods (Admin)

```
GET    /api/foods            List foods
POST   /api/foods            Create food
GET    /api/foods/:id        Get food details
PUT    /api/foods/:id        Update food
DELETE /api/foods/:id        Delete food
```

### Recipes (Admin)

```
GET    /api/recipes          List recipes
POST   /api/recipes          Create recipe
GET    /api/recipes/:id      Get recipe details
PUT    /api/recipes/:id      Update recipe
DELETE /api/recipes/:id      Delete recipe
```

(Similar patterns for /api/users, /api/mailings, /api/translations, etc.)

## Project Structure

```
resources/
├── js/
│   ├── pages/                 # Page components
│   │   ├── Admin/             # Admin pages
│   │   │   ├── Foods/
│   │   │   ├── Recipes/
│   │   │   ├── Users/
│   │   │   ├── Mailings/
│   │   │   ├── Translations/
│   │   │   ├── Roles/
│   │   │   └── RecipeIngredients/
│   │   ├── Profile/
│   │   ├── Auth/
│   │   ├── Foods/
│   │   ├── Recipes/
│   │   ├── Home.vue
│   │   └── NotFound.vue
│   ├── stores/                # Pinia stores
│   │   ├── auth.js            # Auth store
│   │   ├── foods.js           # Foods store
│   │   └── recipes.js         # Recipes store
│   ├── services/
│   │   └── api.js             # Axios instance
│   ├── router/
│   │   └── index.js           # Vue Router config
│   ├── App.vue                # Root component
│   └── app.js                 # Entry point
└── views/
    └── app.blade.php          # SPA template
```

## Common Tasks

### Add a New Admin Page

1. Create component: `resources/js/pages/Admin/NewFeature/Index.vue`
2. Add route to `resources/js/router/index.js`:
    ```javascript
    {
      path: '/admin/new-feature',
      name: 'AdminNewFeature',
      component: () => import('../pages/Admin/NewFeature/Index.vue'),
      meta: { requiresAuth: true, requiresAdmin: true }
    }
    ```
3. Update `routes/web.php` to expose API endpoint:
    ```php
    Route::apiResource('new-features', NewFeatureController::class);
    ```

### Update an Existing Component

Just edit the `.vue` file - Vite will hot-reload!

### Test API Endpoints

Use Postman or curl:

```bash
curl http://localhost:8000/api/foods
```

## Troubleshooting

### Blank Page

-   Check browser console for errors (F12)
-   Ensure backend is running on port 8000
-   Check network tab for failed requests

### 401 Unauthorized Errors

-   You need to log in first
-   Go to /login and enter valid credentials
-   Token is stored in localStorage

### Admin Routes Show Home Page

-   You need to be logged in as an admin user
-   Check user role in database

### Styles Not Loading

-   Clear browser cache (Ctrl+Shift+Delete)
-   Run `npm run dev` again

## Performance Notes

Development (`npm run dev`):

-   3-5 second startup
-   Hot Module Replacement enabled
-   Uncompressed CSS/JS
-   Source maps available

Production (`npm run build`):

```bash
npm run build        # Creates public/build/
php artisan serve    # Or your production server
```

-   Single optimized bundle
-   Code splitting by route
-   CSS minified and scoped
-   ~70KB total (gzip)

## Next: Documentation

-   See `VUE_MIGRATION_COMPLETE.md` for detailed API docs
-   See `BLADE_TO_VUE_CONVERSION.md` for architecture overview

---

**Status:** Ready to develop! 🚀

Blade views are archived but can be deleted:

```bash
rm -rf resources/views/foods resources/views/recipes resources/views/users # etc...
```

Just keep `resources/views/app.blade.php` - it's the SPA entry point!
