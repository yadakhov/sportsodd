h<?php

use Yadakhov\SportsOdd;

class MainTest extends TestCase
{
    public function testHarness()
    {
        echo "American | Decimal\n";
        echo "-------- | -------\n";

        for ($i = -2000; $i <= 1400; $i = $i + 5) {
            echo "$i | " . SportsOdd::americanToDecimal($i) . PHP_EOL;
        }

        echo '-----------------------------------------------------------' . PHP_EOL;

        echo "Decimal | American\n";
        echo "------- | --------\n";

        for ($i = 1.01; $i <= 2; $i = $i + 0.01) {
            echo "$i | " . SportsOdd::decimalToAmerican($i) . PHP_EOL;
        }
        for ($i = 2; $i <= 15; $i++) {
            echo "$i | " . SportsOdd::decimalToAmerican($i) . PHP_EOL;
        }
    }
}
