<?php

/**
 * for Trim input value helper function
 */
if (!function_exists('trim_string')) {
   
    function trim_string($value)
    {
        return trim($value);
    }
}

/**
 * for make first letter of name captial
 */
if (!function_exists('format_input_name')) {
    
    function format_input_name($input)
    {
        return ucfirst($input);
    }
}

?>