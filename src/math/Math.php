<?php

namespace Bermuda\Utils\Math;

final class Math
{
    public static function percent(int|float $percent, int|float $of): int|float
    {
        return $of/100 * $percent;
    }
  
    public static function percentageOf(int|float $number, int|float $of): int|float
    {
        return $number/$of * 100 * 100;
    }
}
