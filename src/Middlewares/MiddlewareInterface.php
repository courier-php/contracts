<?php
declare(strict_types = 1);

namespace Courier\Contracts\Middlewares;

use Courier\Contracts\Messages\MessageInterface;

interface MiddlewareInterface {
  /**
   * @param callable(MessageInterface, callable): void $next
   */
  public function handle(MessageInterface $message, callable $next): void;
}
