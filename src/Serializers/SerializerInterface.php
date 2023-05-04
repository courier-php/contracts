<?php
declare(strict_types = 1);

namespace Courier\Contracts\Serializers;

use Courier\Contracts\Messages\MessageInterface;

interface SerializerInterface {
  public function getContentType(): string;
  public function getContentEncoding(): string;
  public function serialize(MessageInterface $message): string;
  public function unserialize(string $data): MessageInterface;
}
