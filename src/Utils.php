<?php

namespace Hexlet\Phpunit\Utils;

function reverseString($string)
{
    return implode(array_reverse(str_split($string)));
}

var_dump(array_values([2, 1, 2, 3]));
var_dump(array_values(array_diff([2, 1, 2, 3], [12])));