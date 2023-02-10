<?php
declare(strict_types = 1);

namespace Courier\Transport;

use Courier\Message\Envelope;

interface TransportInterface {
  /**
   * Transport initialization
   *
   * @throws \Courier\Exception\TransportException
   */
  public function init(): void;
  /**
   * Return the attribute value
   */
  public function getAttribute(string $name): mixed;
  /**
   * Set the attribute value
   */
  public function setAttribute(string $name, mixed $value): static;
  /**
   * Binds a queue to a route
   *
   * @throws \Courier\Exception\TransportException
   */
  public function bindQueue(string $queueName, string $routingKey): void;
  /**
   * Unbinds a route to a queue
   *
   * @throws \Courier\Exception\TransportException
   */
  public function unbindQueue(string $queueName, string $routingKey): void;
  /**
   * Get the number of pending messages in queue
   *
   * @throws \Courier\Exception\TransportException
   */
  public function pending(string $queueName): int;
  /**
   * Purge all pending messages in queue
   *
   * @throws \Courier\Exception\TransportException
   */
  public function purge(string $queueName): void;
  /**
   * Subscribe to receive messages from a queue
   *
   * @throws \Courier\Exception\TransportException
   */
  public function subscribe(string $queueName): void;
  /**
   * Handle subscription's message consumption, returning the number of consumed messages
   *
   * @param callable $consumer function (Envelope $envelope, string $queueName): \Courier\Processor\Handler\HandlerResultEnum
   * @param callable $stop function (int $accepted, int $rejected, int $requeued, int $consumed): bool
   *
   * Note: $consumed = $accepted + $rejected + $requeued
   *
   * @throws \Courier\Exception\TransportException
   */
  public function consume(string $queueName, callable $consumer, callable $stop): int;
  /**
   * Send envelope to queue
   *
   * @throws \Courier\Exception\TransportException
   */
  public function send(string $routingKey, Envelope $envelope): void;
  /**
   * Accept envelope (ACK)
   *
   * @throws \Courier\Exception\TransportException
   */
  public function accept(Envelope $envelope): void;
  /**
   * Reject/Requeue envelope (NACK)
   *
   * @throws \Courier\Exception\TransportException
   */
  public function reject(Envelope $envelope, bool $requeue = false): void;
}
