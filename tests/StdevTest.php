<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Romulodl\Stdev;

final class StdevTest extends TestCase
{
	public function testCalculateStdevWithWrongTypeValues(): void
	{
		$this->expectException(Exception::class);

		$stdev = new Stdev();
		$stdev->calculate(['poop']);
	}

	public function testCalculateStdevWithEmptyValues(): void
	{
		$this->expectException(Exception::class);

		$stdev = new Stdev();
		$stdev->calculate([]);
	}

	public function testCalculateStdevWithValid20Values(): void
	{
		$val = require(__DIR__ . '/values.php');
		$val = array_slice($val, -20);
		$values = [];
		foreach ($val as $v) {
			$values[] = $v[2];
		}

		$stdev = new Stdev();
		$this->assertSame(390.89, round($stdev->calculate($values), 2));
	}
}
