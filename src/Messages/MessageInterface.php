<?php
declare(strict_types = 1);

namespace Courier\Contracts\Messages;

interface MessageInterface {
  /**
   * @return array<string, mixed>
   */
  public function getPayload(): array;

  /**
   * Attributes are mutable message features that can be set, updated and unset.
   */
  public function getAttribute(string $name): mixed;
  /**
   * @return array<string, mixed>
   */
  public function getAttributes(): array;
  public function hasAttribute(string $name): bool;
  public function setAttribute(string $name, mixed $value): MessageInterface;
  /**
   * @param array<string, mixed> $attributes
   */
  public function setAttributes(array $attributes): MessageInterface;
  public function unsetAttribute(string $name): MessageInterface;

  /**
   * Properties are immutable message features that can only be set once
   */
  public function getProperty(string $name, mixed $default = null): mixed;
  /**
   * @return array<string, mixed>
   */
  public function getProperties(): array;
  public function hasProperty(string $name): bool;
  public function setProperty(string $name, mixed $value): MessageInterface;
  /**
   * @param array<string, mixed> $properties
   */
  public function setProperties(array $properties): MessageInterface;
}
