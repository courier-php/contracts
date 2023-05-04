<?php
declare(strict_types = 1);

namespace Courier\Contracts\Clients;

interface CollectorInterface {
  public function stop(): void;
  public function collect(string ...$queueNames): void;
}
