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

class CreateCreditTypesTable extends Migration
{
    public function up()
    {
        Schema::create('credit_types', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('credit_types');
    }
}
