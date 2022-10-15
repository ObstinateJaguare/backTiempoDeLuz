<?php

/**
 * En: Convert keys to a string array in snake case.
 * Es: Convertir llaves una matriz cadena en snake case.
 */
if (!function_exists('convert_array_key_to_snake_case')) {
    function convert_array_keys__to_snake_case(array $input)
    {
        $output = [];
        array_walk($input, function ($value, $key) use (&$output) {
            $output[strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key))] = $value;
        });
        return $output;
    }
}