<?php
declare(strict_types = 1);

namespace Courier\Contracts\Bus;

use Courier\Contracts\Messages\MessageInterface;

interface BusInterface {
  public function handle(MessageInterface $message): void;
}
