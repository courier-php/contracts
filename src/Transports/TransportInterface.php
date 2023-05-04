<?php
declare(strict_types = 1);

namespace Courier\Contracts\Transports;

use Courier\Contracts\Messages\MessageInterface;

interface TransportInterface {
  public function addRoute(string $routingKey, string $queueName): self;
  public function publish(MessageInterface $message, string $routingKey): void;
  public function collect(string $queueName): ?MessageInterface;
  public function accept(MessageInterface $message): void;
  public function reject(MessageInterface $message, bool $requeue = false): void;
}
