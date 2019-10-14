<?php
declare (strict_types = 1);

use PHPUnit\Framework\TestCase;

final class NumeralsTest extends TestCase
{
	public function testCanBeCreated() : void
	{
		$this->assertInstanceOf(
			Roman::class,
			Roman::new("MCMLXXXIX")
		);
	}
}
