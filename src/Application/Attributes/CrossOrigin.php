<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Application\Attributes;

use Attribute;


#[Attribute(Attribute::TARGET_METHOD)]
class CrossOrigin // replaced by Requires(sameOrigin: false)
{
}
