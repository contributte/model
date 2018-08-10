<?php declare(strict_types = 1);

namespace Contributte\Model\Exception\Runtime;

use Contributte\Model\Exception\RuntimeException;

class InvalidEmailAddressException extends RuntimeException
{

	public function __construct(string $value)
	{
		parent::__construct(sprintf('Invalid email address "%s"', $value));
	}

}
