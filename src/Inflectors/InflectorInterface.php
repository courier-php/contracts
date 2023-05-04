<?php
declare(strict_types = 1);

namespace Courier\Contracts\Inflectors;

interface InflectorInterface {
  public function resolve(string $class): string;
}
