<?php

declare(strict_types=1);

/*
 * This file is part of Rewardable.
 *
 * (c) Brian Faust <info@lifeids.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeaderboardTable extends Migration
{
    public function up()
    {
        Schema::create('leaderboard', function (Blueprint $table) {
            $table->increments('id');

            $table->morphs('boardable');
            $table->integer('position');
            $table->integer('experience')->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('leaderboard');
    }
}
