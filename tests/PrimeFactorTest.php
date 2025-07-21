<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorTest extends TestCase
{

	public function test_it_generates_prime_factors_for_1()
	{
		$factors = new PrimeFactors;
		$this->assertEquals([], $factors->generate(1));
	}

	public function test_it_generates_prime_factors_for_2()
	{
		$factors = new PrimeFactors;
		$this->assertEquals([2], $factors->generate(2));
	}

	public function test_it_generates_prime_factors_for_3()
	{
		$factors = new PrimeFactors;

		$this->assertEquals([3], $factors->generate(3));
	}
	
	public function test_it_generates_prime_factors_for_4()
	{
		$factors = new PrimeFactors;
		$this->assertEquals([4], $factors->generate(4));
	}
}
