<?php

namespace App;

class RomanNumerals
{
	const ROMAN_NUMERALS = [
		'X' => 10,
		'IX' => 9,
		'V' => 5,
		'IV' => 4,
		'I' => 1,
	];

	public static function generate($number)
	{
		$result = '';

		foreach (static::ROMAN_NUMERALS as $roman => $numeric) {
			while ($number >= $numeric) {
				$result .= $roman;
				$number -= $numeric;
			}
		}

		return $result;
	}
}
