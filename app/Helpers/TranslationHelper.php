<?php

function translate($string)
{
    if (intval($string) == 0) {
        return translate($string);
    } else {
        return $string;
    }
}
