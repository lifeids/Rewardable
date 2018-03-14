<?php

declare(strict_types=1);

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lifeids\Rewardable\Transactions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Transaction extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = ['meta' => 'array'];

    public function transactionable(): MorphTo
    {
        return $this->morphTo();
    }
}
