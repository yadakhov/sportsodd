<?php

namespace Yadakhov;

/**
 * Class SportsOdd.
 *
 * https://www.pinnacle.com/en/betting-articles/educational/converting-between-american-and-decimal-odds
 */
class SportsOdd
{
    /**
     * Convert american odd to decimal odd.
     *
     * @param $american
     * @param int $precision
     *
     * @return int
     * @throws \Exception
     */
    public static function americanToDecimal($american, $precision = 10)
    {
        if ($american <= -101) {
            return 1 + round(100 / abs($american), $precision);
        }

        if ($american >= 100) {
            return 1 + round($american / 100, $precision);
        }

        throw new \Exception('Not a valid american odd: ' . $american);
    }

    /**
     * Convert decimal odd to american odd.
     *
     * @param $decimal
     *
     * @return float
     * @throws \Exception
     */
    public static function decimalToAmerican($decimal)
    {
        if ($decimal == 1) {
            throw new \Exception('Not a valid decimal odd: ' . $decimal);
        }

        if ($decimal >= 2) {
            return round(($decimal - 1) * 100, 0);
        }

        return round((-100) / ($decimal - 1), 0);
    }
}
