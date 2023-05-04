<?php
declare(strict_types = 1);

namespace Courier\Contracts\Locators;

use Courier\Contracts\Processors\HandlerInterface;
use Courier\Contracts\Processors\ListenerInterface;

interface LocatorInterface {
  public function instanceFor(string $class): HandlerInterface | ListenerInterface;
}
