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
        Schema::create('financial_product', function (Blueprint $table) {
            $table->id();
            $table->decimal('net_ircm_amount', 15, 2);
            $table->decimal('rate', 15, 2);
            $table->decimal('amount_deduct', 15, 2);
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
        Schema::dropIfExists('financial_product');
    }
};
