<?php

declare(strict_types=1);

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lifeids\Rewardable\Ranks;

use Lifeids\Eloquent\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Rank extends Model implements HasMedia
{
    use HasMediaTrait;
    use PresentableTrait;

    protected $dates = ['awarded_at', 'revoked_at'];

    public function rankable(): MorphTo
    {
        return $this->morphTo();
    }

    public function requirementType(): BelongsTo
    {
        return $this->belongsTo(CreditType::class, 'requirement_type_id');
    }

    public function getPresenterClass(): string
    {
        return RankPresenter::class;
    }
}
