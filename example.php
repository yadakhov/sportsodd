<?php

require __DIR__ . '/vendor/autoload.php';

use Yadakhov\SportsOdd;

echo "American | Decimal\n";
echo "-------- | -------\n";

foreach (range(-4000, -101) as $american) {
    echo "$american | " . SportsOdd::americanToDecimal($american) . PHP_EOL;
}
foreach (range(100, 4000) as $american) {
    echo "$american | " . SportsOdd::americanToDecimal($american) . PHP_EOL;
}

try {
    SportsOdd::americanToDecimal(0);
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
