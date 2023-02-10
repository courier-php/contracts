<?php
declare(strict_types = 1);

namespace Courier\Router;

interface RouterInterface {
  public function getRoutes(): RouteCollection;

  public function findRouteByQueueName(string $queueName): Route;

  public function findRouteByRoutingKey(string $routingKey): Route;

  public function findRouteByProcessorClass(string $processorClass): Route;

  public function findRouteByMessageClass(string $messageClass): Route;

  public function findRouteByName(string $routeName): Route;

  public function addRoute(string $messageClass, string $processorClass, string $routeName = null): self;

  public function isRoutable(string $messageClass): bool;
}
