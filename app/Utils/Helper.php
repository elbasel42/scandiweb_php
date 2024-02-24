<?php

namespace App\Utils;
class Helper
{
    static function removeZeros(string $num)
    {
        return ltrim(rtrim($num, '.0'), '0');
    }
}
