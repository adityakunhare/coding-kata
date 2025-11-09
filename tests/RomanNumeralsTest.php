<?php

use App\RomanNumerals;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{

	public static function numbers()
	{
		return [
			"I" => [1, 'I'],
			'II' => [2, 'II'],
			'III' => [3, 'III'],
			'IV' => [4, 'IV'],
			'V' => [5, 'V'],
			'VI' => [6, 'VI'],
			'VII' => [7, 'VII'],
			'VIII' => [8, 'VIII'],
			'IX' => [9, 'IX'],
			'X' => [10, 'X'],
			'XI' => [11,  'XI'],
			'XII' => [12, 'XII'],
			'XIII' => [13, 'XIII'],
			'XIV' => [14, 'XIV'],
			'XV' => [15, 'XV'],
			'XVI' => [16, 'XVI'],
		];
	}

	#[DataProvider('numbers')]
	public function test_roman_numeral_for($input, $output)
	{
		$this->assertEquals($output, RomanNumerals::generate($input));
	}
}
