# php currency-util

A simple library to lookup the currency symbol for a given currency code.

## Installation

```bash
composer req terdia/currency-util
```

## Usage

### Get symbol from currency code
```php
use Currency\Util\CurrencySymbolUtil;

CurrencySymbolUtil::getSymbol('GBP') //=> '£'
CurrencySymbolUtil::getSymbol('EUR') //=> '€'
CurrencySymbolUtil::getSymbol('USD') //=> '$'
CurrencySymbolUtil::getSymbol('NOT A VALID CODE') throw InvalidArgumentException
```

### Get List of supported  currency code
```php

use Currency\Util\CurrencySymbolMapping;

var_dump(CurrencySymbolMapping::values())
// =>
[
 "USD" => "$",
 "GBP" => "£",
 "EUR" => "€",
 …
]
```

## Tests
```bash
vendor/bin/phpunit tests
``` 

## Contribution
Feel free to contribute to this library.
