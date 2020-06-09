<?php

namespace Romulodl;

class Stdev
{
	/**
	 * Calculate the STDEV
	 * more info: https://school.stockcharts.com/doku.php?id=technical_indicators:standard_deviation_volatility
	 */
	public function calculate(array $values) : float
	{
		if (empty($values)) {
			throw new \Exception('[' . __METHOD__ . '] $values parameters is invalid');
		}

		$size = count($values);
		$mean = array_sum($values) / $size;
		$squares = [];
		foreach ($values as $value) {
			if (!is_numeric($value)) {
				throw new \Exception('[' . __METHOD__ . '] invalid value in the values list');
			}

			$squares[] = pow($value - $mean, 2);
		}

		return sqrt(array_sum($squares) / $size);
	}
}
