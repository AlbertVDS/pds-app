# Database Migration Fix Guide

## Problem

The migration `2025_07_21_113441_make_column_unique_in_tables.php` is failing because there are duplicate values in the `tmdb_id` column of the `recipe_instructions` table.

Error:

```
SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '0' for key 'recipe_instructions_tmdb_id_unique'
```

## Solution

I've created two fixes:

### Fix 1: New Migration (Automatic)

A new migration file has been created:

```
database/migrations/2025_01_27_000001_fix_duplicate_tmdb_ids.php
```

This migration:

1. Removes duplicate tmdb_id entries (keeps first occurrence)
2. Replaces NULL/0 values with unique identifiers
3. Adds the unique constraint safely

### Fix 2: Updated Original Migration (Robust)

The original migration file has been updated to:

1. Clean up duplicates before adding constraints
2. Check if constraints already exist
3. Handle all affected tables (recipes, recipe_instructions, recipe_tag_pivot, recipe_ingredient_measurements)

## Steps to Apply the Fix

### Option A: Complete Fresh Start (Recommended)

If you can reset your database:

```bash
# 1. Rollback all migrations
php artisan migrate:rollback --step=100

# 2. Delete the problematic migration (it's now fixed)
# The file is already updated with the fix

# 3. Run fresh migrations
php artisan migrate

# 4. Seed database (if you have seeders)
php artisan db:seed
```

### Option B: Fix Without Full Rollback

If you've already partially migrated:

```bash
# 1. Run the new fix migration first
php artisan migrate

# 2. This will clean up duplicates and add constraints safely
```

### Option C: Manual Database Cleanup (If migrations fail)

If you need to manually clean the database:

```sql
-- Connect to your database
mysql -u root -p your_database_name

-- View duplicates
SELECT tmdb_id, COUNT(*) as count
FROM recipe_instructions
GROUP BY tmdb_id
HAVING count > 1;

-- Remove duplicates (keep first occurrence)
DELETE FROM recipe_instructions
WHERE id NOT IN (
    SELECT MIN(id)
    FROM (
        SELECT MIN(id) as id
        FROM recipe_instructions
        WHERE tmdb_id IS NOT NULL
        GROUP BY tmdb_id
    ) as min_ids
) AND tmdb_id IS NOT NULL;

-- Replace NULL/0 values
UPDATE recipe_instructions
SET tmdb_id = CONCAT('recipe_instruction_', id)
WHERE tmdb_id IS NULL OR tmdb_id = 0;

-- Then run migrations
php artisan migrate
```

## Files Modified

1. **Created**: `database/migrations/2025_01_27_000001_fix_duplicate_tmdb_ids.php`

    - Fixes recipe_instructions table
    - Removes duplicates
    - Adds unique constraint

2. **Updated**: `database/migrations/2025_07_21_113441_make_column_unique_in_tables.php`
    - Now cleans duplicates before adding constraints
    - Checks for existing constraints
    - More robust error handling

## Verification After Fix

After running migrations, verify the fix:

```bash
# Check that migrations completed
php artisan migrate:status

# Verify unique constraints are in place
mysql -u root -p your_database_name
SHOW KEYS FROM recipe_instructions WHERE Column_name = 'tmdb_id';
```

## Prevention Going Forward

To prevent this in future:

1. **Use Data Factories**: Create recipes with proper tmdb_id values
2. **Add Validation**: Validate tmdb_id in models
3. **Default Values**: Set proper defaults instead of 0/NULL
4. **Migrations First**: Plan constraints before inserting data

## Troubleshooting

### Still getting the error?

1. Verify database is running:

    ```bash
    mysql -u root -p -e "SELECT 1;"
    ```

2. Check migration status:

    ```bash
    php artisan migrate:status
    ```

3. If migration is stuck, reset it:
    ```bash
    php artisan migrate:rollback --step=1
    ```

### Need help?

-   Check Laravel logs: `storage/logs/laravel.log`
-   Verify .env database settings
-   Ensure MariaDB/MySQL is running
-   Check file permissions on database/migrations

---

**Status**: ✅ Fixes applied and ready to deploy  
**Date**: January 27, 2025
