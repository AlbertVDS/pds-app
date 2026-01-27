<?php

/**
 * Translate a string if it's not purely numeric.
 * 
 * This function checks if the input string is a translation key (non-numeric)
 * and translates it using Laravel's translation helper. Pure numeric strings
 * are returned as-is, allowing numeric values to pass through without translation.
 *
 * @param string|int|null $string The string to potentially translate
 * @return string The translated string or original value
 *
 * @example
 * translate('foods.apples')  // Returns translated apples
 * translate('123')            // Returns '123' unchanged
 */
function translate($string)
{
    // Handle null or empty values
    if (empty($string)) {
        return $string ?? '';
    }

    // Convert to string for type checking
    $stringValue = (string)$string;
    
    // Check if the string is purely numeric - if so, return it as-is
    if (is_numeric($stringValue)) {
        return $stringValue;
    }

    // Attempt to translate the string
    return __($stringValue);
}

