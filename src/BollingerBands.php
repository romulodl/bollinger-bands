<?php

namespace Romulodl;

class BollingerBands
{
	private $stdev;

	public function __construct($stdev = null) {
		$this->stdev = $stdev ?: new Stdev();
	}
	/**
	 * Calculate the bollinger bands
	 *
	 * return array [middle, upper, lower]
	 * more info: https://school.stockcharts.com/doku.php?id=technical_indicators:bollinger_bands
	 */
	public function calculate(array $values, int $stdev = 2) : array
	{
		if (empty($values)) {
			throw new \Exception('[' . __METHOD__ . '] $values parameters is invalid');
		}

		$sma = array_sum($values) / count($values);
		$stdev = $this->stdev->calculate($values) * $stdev;

		return [
			$sma,
			$sma + $stdev,
			$sma - $stdev
		];
	}
}
