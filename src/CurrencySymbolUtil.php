<?php declare(strict_types=1);


namespace Currency\Util;

use InvalidArgumentException;

class CurrencySymbolUtil
{

    public static function getSymbol(string $currency): string
    {
        $currencySymbolMapping = CurrencySymbolMapping::values();
        /** @var string $symbol */
        $symbol = $currencySymbolMapping[$currency] ?? null;

        if ($symbol === null) {
             throw new InvalidArgumentException('Invalid currency');
        }

        return $symbol;
    }
}
