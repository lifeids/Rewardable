<?php

declare(strict_types=1);

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lifeids\Rewardable\Exceptions;

use Exception;

class BlacklistedException extends Exception
{
    public function __construct($type, $id)
    {
        parent::__construct("Entity [{$type}] with ID [{$id}] is blacklisted.");
    }
}
