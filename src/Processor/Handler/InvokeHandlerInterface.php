<?php
declare(strict_types = 1);

namespace Courier\Processor\Handler;

use Courier\Message\CommandInterface;

interface InvokeHandlerInterface extends HandlerInterface {
  /**
   * @param array{
   *   appId: string,
   *   correlationId: string,
   *   expiration: string,
   *   headers: array<string, mixed>,
   *   isRedelivery: bool,
   *   messageId: string,
   *   priority: \Courier\Message\EnvelopePriorityEnum,
   *   replyTo: string,
   *   timestamp: \DateTimeImmutable|null,
   *   type: string,
   *   userId: string
   * } $attributes
   */
  public function __invoke(CommandInterface $command, array $attributes): HandlerResultEnum;
}
