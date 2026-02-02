# Vue Frontend Quick Start

Your PDS-App now has a complete Vue 3 + Vite frontend! Here's how to get started:

## ⚡ Quick Setup (5 minutes)

### 1. Install Frontend Dependencies

```bash
npm install
```

### 2. Start Development Servers

**Terminal 1 - Vue Development Server:**

```bash
npm run dev
```

This starts Vite with hot module replacement on `http://localhost:5173`

**Terminal 2 - Laravel Development Server:**

```bash
php artisan serve
```

This starts Laravel on `http://localhost:8000`

### 3. Open in Browser

Navigate to `http://localhost:8000` and you should see the Vue app!

## 📁 What Was Created

### 17 New Files:

-   **1** App component (App.vue)
-   **9** Page components (Home, Login, Register, Foods, Recipes, Profile, etc.)
-   **3** Pinia store modules (auth, foods, recipes)
-   **1** API service layer
-   **1** Router configuration
-   **1** HTML entry point (app.blade.php)
-   **1** Updated main entry (app.js)

### Updated Files:

-   `vite.config.js` - Added Vue plugin
-   `package.json` - Added Vue and related dependencies
-   `routes/web.php` - Added SPA fallback route

## 🎯 Key Features

✅ **Authentication System**

-   Login page with email/password
-   Registration page
-   Token-based with Laravel Sanctum
-   Protected routes

✅ **Food Management**

-   Browse and search foods
-   View FODMAP indicators
-   Detailed food information

✅ **Recipe Management**

-   Browse and search recipes
-   View ingredients & instructions
-   Cuisine classifications

✅ **User Profile**

-   Account information
-   FODMAP sensitivity settings
-   Language preferences

✅ **Responsive Design**

-   Mobile-friendly
-   Tailwind CSS styling
-   Modern green IBS theme

## 🚀 First Steps

### 1. Test the App

1. Run both dev servers
2. Visit `http://localhost:8000`
3. Click "Register" to create account
4. Explore Foods and Recipes sections

### 2. Connect to Backend

The frontend expects these API endpoints:

```
GET    /api/foods              - List all foods
GET    /api/foods/{id}         - Get single food
GET    /api/recipes            - List all recipes
GET    /api/recipes/{id}       - Get single recipe
GET    /api/user               - Get current user info
POST   /api/login              - Login user
POST   /api/register           - Register new user
```

Make sure your Laravel API has these routes!

### 3. Make it Production Ready

```bash
npm run build
```

This creates optimized files in `public/build/`. Deploy these with your Laravel app.

## 📚 File Structure

```
resources/
├── js/
│   ├── app.js                    ← Entry point
│   ├── App.vue                   ← Root component
│   ├── router/index.js           ← Routes
│   ├── stores/                   ← State management
│   │   ├── auth.js
│   │   ├── foods.js
│   │   └── recipes.js
│   ├── services/api.js           ← HTTP client
│   └── pages/                    ← Page components
│       ├── Home.vue
│       ├── Auth/ (Login, Register)
│       ├── Foods/ (Index, Detail)
│       ├── Recipes/ (Index, Detail)
│       ├── Profile/
│       └── NotFound.vue
└── views/
    └── app.blade.php             ← HTML template
```

## 🔧 Available Commands

```bash
# Development
npm run dev              # Start Vite dev server

# Production
npm run build            # Build for production
npm run preview          # Preview production build locally

# Both servers together (optional)
npm run dev & php artisan serve
```

## 📖 Documentation

For detailed information, see:

-   **VUE_FRONTEND_GUIDE.md** - Complete frontend documentation
-   **FRONTEND_SUMMARY.md** - Implementation summary
-   **CODE_IMPROVEMENTS.md** - Backend improvements

## 🐛 Troubleshooting

**Styles not showing?**

-   Make sure Vite dev server is running
-   Check Tailwind CSS is loading in browser DevTools

**API requests failing?**

-   Verify Laravel API endpoints exist
-   Check CORS configuration if needed
-   Look at browser Network tab for error details

**Routes not working?**

-   Ensure you're on `http://localhost:8000` (not 5173)
-   Clear browser cache
-   Check Vue Router configuration

**Hot reload not working?**

-   Verify Vite is running in Terminal 1
-   Check that Vite port (5173) is accessible

## 💡 Common Tasks

### Add a New Page

1. Create `resources/js/pages/MyPage.vue`
2. Add route in `resources/js/router/index.js`
3. Link in `App.vue` navigation

### Modify API Calls

Edit `resources/js/stores/*.js` to adjust API requests

### Change Styling

Use Tailwind classes in components or edit `resources/css/app.css`

### Update Components

Edit `.vue` files in `resources/js/pages/`

## 📞 Support

Check the documentation files for detailed guides on:

-   Authentication flow
-   State management with Pinia
-   Component structure
-   API integration
-   Deployment

---

**Ready?** Run `npm install` and `npm run dev` to get started! 🎉
