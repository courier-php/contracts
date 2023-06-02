<?php
declare(strict_types = 1);

namespace Courier\Contracts\Clients;

use Courier\Contracts\Messages\MessageInterface;

interface DispatcherInterface {
  public function dispatch(MessageInterface ...$messages): void;
}
