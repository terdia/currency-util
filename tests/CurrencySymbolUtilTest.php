<?php declare(strict_types=1);

namespace Currency\Util\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Currency\Util\CurrencySymbolUtil;
use Currency\Util\CurrencySymbolMapping;

class CurrencySymbolUtilTest extends TestCase
{
    const VALID = 'USD';
    const INVALID = 'INVALID';

    public function testGetCurrencySymbolItReturnsUsd()
    {
        $symbol = CurrencySymbolUtil::getSymbol(self::VALID);
        $this->assertSame('$', $symbol);
    }

    public function testGetCurrencySymbolWillThrowsInvalidArgumentException()
    {
        $this->expectException(InvalidArgumentException::class);

        CurrencySymbolUtil::getSymbol(self::INVALID);
    }

    public function testAllValuesInCurrencySymbolMappingIsOk()
    {
       $currencies = array_keys(CurrencySymbolMapping::values());
       $currencySymbolMapping = CurrencySymbolMapping::values();

       foreach ($currencies as $currency){
           $this->assertNotEmpty($currencySymbolMapping[$currency]);
       }
    }
}
