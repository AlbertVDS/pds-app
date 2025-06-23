<?php

function translate($string)
{
    if (intval($string) == 0) {
        return __($string);
    } else {
        return $string;
    }
}
