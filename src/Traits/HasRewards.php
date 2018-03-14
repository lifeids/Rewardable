<?php

declare(strict_types=1);

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lifeids\Rewardable\Traits;

use Lifeids\Rewardable\Badges\HasBadges;
use Lifeids\Rewardable\Credits\HasCredits;
use Lifeids\Rewardable\Ranks\HasRanks;
use Lifeids\Rewardable\Transactions\HasTransactions;

trait HasRewards
{
    use HasBadges;
    use HasCredits;
    use HasRanks;
    use HasTransactions;
}
