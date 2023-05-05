<?php
declare(strict_types = 1);

namespace Courier\Contracts\Providers;

use Countable;
use Iterator;

interface ProviderInterface extends Countable, Iterator {}
