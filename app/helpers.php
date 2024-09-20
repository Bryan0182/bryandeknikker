<?php

if (!function_exists('berekenLeeftijd')) {
    function berekenLeeftijd($geboorteDatum) {
        $geboorteDatumObj = new DateTime($geboorteDatum);
        $huidigeDatumObj = new DateTime();
        $leeftijdInterval = $huidigeDatumObj->diff($geboorteDatumObj);
        return $leeftijdInterval->y;
    }
}
