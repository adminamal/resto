<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
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
            $table->foreignId('user_id');
            $table->double('total_amount', 8, 3)->nullable();
            $table->float('tax_rate', 5, 2)->nullable();
            $table->double('tax_amount', 8, 3)->nullable();
            $table->timestamp('complet_time')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDeleate;
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
}
