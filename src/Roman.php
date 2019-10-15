<?php
declare (strict_types = 1);

final class Roman
{
	private function __construct(string $value) {
		$this->value = $value;
	}

	public static function fromString(string $input) : self
	{
		return new self($input);
	}

	public static function fromDecimal(int $input) : self
	{
		throw new Exception('Not implemented');
	}

	public function toDecimal() : int
	{
		throw new Exception('Not implemented');
	}
}
