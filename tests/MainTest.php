h<?php

use Yadakhov\SportsOdd;

class MainTest extends TestCase
{
    public function testHarness()
    {
        for ($i = -2000; $i <= 1400; $i = $i + 5) {
            echo "$i | " . SportsOdd::americanToDecimal($i) . PHP_EOL;
        }
    }
}
