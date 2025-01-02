<?php


if (!function_exists('mask_account')) {

    function mask_account(string $stringMask)
    {
        return Str::mask($stringMask, '*', 0, -4);
    }
}

if (!function_exists('mask_value')) {

    function mask_value(string $stringMask, string $maskChar = "*")
    {
        return Str::mask($stringMask, $maskChar, 3);
    }
}

