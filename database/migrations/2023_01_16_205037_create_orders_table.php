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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id')->unique();
            $table->integer('amount');
            $table->text('products');
            $table->dateTime('paid_at')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('nickname')->nullable();
            $table->string('suname')->nullable();
            $table->string('country')->nullable();
            $table->text("address")->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
