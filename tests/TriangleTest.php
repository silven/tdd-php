<?php
declare (strict_types = 1);

use PHPUnit\Framework\TestCase;

final class TriangleTest extends TestCase
{
	public function testCanBeCreated() : void
	{
		$this->assertInstanceOf(
			Triangle::class,
			Triangle::new(3, 2, 1)
		);
	}
}