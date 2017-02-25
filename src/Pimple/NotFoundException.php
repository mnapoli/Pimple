<?php
declare(strict_types = 1);

namespace Pimple;

use Psr\Container\NotFoundExceptionInterface;

/**
 * No entry was found in the container.
 */
class NotFoundException extends \InvalidArgumentException implements NotFoundExceptionInterface
{
}
