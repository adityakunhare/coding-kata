<?php

use App\PrimeFactors;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class PrimeFactorTest extends TestCase
{

	#[DataProvider('factors')]
	public function test_it_generates_prime_factors_for_1($input, $expected)
	{
		$factors = new PrimeFactors;
		$this->assertEquals($expected, $factors->generate($input));
	}


	public static function factors()
	{
		return [
			[1, []],
			[2, [2]],
			[3, [3]],
			[4, [2,2]],
			[5, [5]],
			[6, [2,3]],
			[8, [2,2,2]],
			[9, [3,3]],
			[100, [2,2,5,5]],
			[1000, [2,2,2,5,5,5]],
		];	
	}
}
