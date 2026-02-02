# Profile Page Update - COMPLETED

## Goal

Update `resources/js/pages/Profile/Index.vue` to look like `resources/views/users/edit.blade.php`

## Files Modified

- `resources/js/pages/Profile/Index.vue` - Updated Vue component with Bootstrap styling
- `routes/api.php` - Added API routes for settings, tokens, languages, and mailing groups
- `app/Http/Controllers/User/UserController.php` - Added API methods for profile management
- `app/Services/UserSettingsService.php` - Added public methods for FODMAP and mailing group updates

## Features Implemented

- Profile section with name input, email display, language dropdown with flag images
- FODMAP settings table with checkboxes (fructose, lactose, mannitol, sorbitol, GOS, fructan)
- Mailing groups section with checkboxes
- API Token section with generate button
- "Apply changes" submit button with API integration

## Reference Design

- File: resources/views/users/edit.blade.php
- Style: Bootstrap 5 with Select2 for language dropdown
