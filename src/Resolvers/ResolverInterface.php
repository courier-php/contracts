<?php
declare(strict_types = 1);

namespace Courier\Contracts\Resolvers;

interface ResolverInterface {
  /**
   * @return iterable{
   *   subjectClass: string
   *   subjectType: string,
   *   methodName: string
   * }
   */
  public function resolve(string $class): iterable;
}
