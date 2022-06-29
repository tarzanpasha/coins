<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol');
            $table->unsignedBigInteger('chain_id');
            $table->boolean('is_presale')->nullable()->default(false);
            $table->string('contract_address')->nullable();
            $table->string('presale_link')->nullable();
            $table->text('description')->nullable();
            $table->date('launch_date');
            $table->string('custom_chart_link')->nullable();
            $table->string('custom_swap_link')->nullable();
            $table->string('website_link')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('discord_link')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('money');
    }
};
