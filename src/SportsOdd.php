<?php

namespace Yadakhov;

/**
 * Class SportsOdd
 *
 * https://www.pinnacle.com/en/betting-articles/educational/converting-between-american-and-decimal-odds
 */
class SportsOdd
{
    const PRECISION = 10;

    public static function americanToDecimal($american)
    {
        if ($american < 0) {
            return 1 + round(100 / abs($american), self::PRECISION);
        }

        if ($american > 0) {
            return 1 + round($american / 100, self::PRECISION);
        }

        return 0;
    }

    /**
     * @param $decimal
     *
     * @return float|int
     */
    public static function decimalToAmerican($decimal)
    {
        if ($decimal == 1) {
            throw new \RuntimeException('Division by zero');
        }

        if ($decimal >= 2) {
            return round(($decimal - 1) * 100, 0);
        }

        return round((-100) / ($decimal - 1), 0);
    }
}
