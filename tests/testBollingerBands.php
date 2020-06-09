<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Romulodl\BollingerBands;

final class BollinderBandsTest extends TestCase
{
	public function testCalculateBollingerBandsWithWrongTypeValues(): void
	{
		$this->expectException(Exception::class);

		$bb = new BollingerBands();
		$bb->calculate(['poop']);
	}

	public function testCalculateBollinderBandsWithEmptyValues(): void
	{
		$this->expectException(Exception::class);

		$bb = new BollingerBands();
		$bb->calculate([]);
	}

	public function testCalculateBollingerBandsWithValid20Values(): void
	{
		$val = require(__DIR__ . '/values.php');
		$val = array_slice($val, -20);
		$values = [];
		foreach ($val as $v) {
			$values[] = $v[2];
		}

		$bb = new BollingerBands();
		$bands = $bb->calculate($values)

		$this->assertSame(9248.08, round($bands[0], 2);
		$this->assertSame(10029.86, round($bands[1], 2));
		$this->assertSame(8466.30, round($bands[2], 2);
	}
}
