<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subscriber_id',false,true);
            $table->bigInteger('website_id',false,true);
            $table->unique(['subscriber_id', 'website_id']);
            $table->timestamps();
        });
        // foreign keys to subscribers table
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->foreign('subscriber_id')->references('id')->on('subscribers')->onDelete('cascade');
        });
        // foreign keys to websites table
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
