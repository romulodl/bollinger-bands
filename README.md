# Bollinger Bands

Calculate the values of the Bollinger Bands from giving values.

![Bollinger-bands](https://github.com/romulodl/bollinger-bands/workflows/BollingerBands/badge.svg)

## Instalation

```
composer require romulodl/bollinger-bands
```

or add `romulodl/bollinger-bands` to your `composer.json`. Please check the latest version in releases.

## Usage

```php
$atr = new Romulodl\BollingerBands();
$atr->calculate(array $values);
//returns an array [middle band, upper band, lower band]
```

Example of use:
```php
$atr = new Romulodl\BollingerBands();
$atr->calculate([
  9807.49,
  9550.67,
  8719.53,
  8561.09,
  8808.71,
  9305.91,
  9786.80,
  9310.73,
  9374.99,
  9678.57,
  9731.10,
  9773.64,
  9508.11,
  9060.00,
  9166.40,
  9176.41,
  8711.37,
  8895.65,
  8837.05,
  9197.32,
]);
```

## Why did you do this?

The PECL Trading extension is crap and not everyone wants to install it.
I am building a trading bot which will need the Bollinger Bands value as part of the calculation.
