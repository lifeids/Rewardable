<?php

declare(strict_types=1);

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lifeids\Rewardable\Transactions;

use Lifeids\Rewardable\Credits\CreditType;
use Lifeids\Rewardable\Exceptions\InsufficientFundsException;
use Lifeids\Rewardable\Transaction\Transaction;

trait HasTransactions
{
    public function transactions()
    {
        return $this->morphMany(Transaction::class, 'transactionable');
    }

    public function chargeCredits($amount, $typeId)
    {
        // Check if the type of credit exists
        $type = CreditType::find($typeId);

        if (!$type) {
            return false;
        }

        // check if the Model has sufficient balance to trade
        if ($this->getBalanceByType($type->slug) < $amount) {
            throw new InsufficientFundsException(
                $this, $this->id, $this->getBalanceByType($type->id) - $amount
            );
        }

        // All fine, take the cash
        $transaction = (new Transaction())->fill([
            'amount'         => $amount,
            'credit_type_id' => $type->id,
        ]);

        $this->transactions()->save($transaction);

        return $transaction;
    }
}
