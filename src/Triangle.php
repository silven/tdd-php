<?php
declare (strict_types = 1);

final class Triangle
{
	private $a;
	private $b;
	private $c;

	private function __construct(float $a, float $b, float $c)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	public static function new(float $a, float $b, float $c) : self
	{
		return new self($a, $b, $c);
	}

	public function __toString() : string
	{
		return sprintf('(%s, %s, %s)', $this->a, $this->b, $this->c);
	}

	public function kind() : string
	{
		// TODO: return "Isosceles", "Equilateral" or "Scalene"
	}
}
