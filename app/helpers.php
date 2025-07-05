<?php

if (!function_exists('devanagari')) {
    function devanagari($value): string
    {
        $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $np = ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'];
        return str_replace($en, $np, (string) $value);
    }
}
