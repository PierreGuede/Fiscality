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
        Schema::create('commission_on_purchase_details', function (Blueprint $table) {
            $table->id();
            $table->integer("Account");
            $table->string("designation");
            $table->integer("total");
            $table->float("amount_commission");
            $table->float("limit");
            $table->float("no_deductible_amount");
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
        Schema::dropIfExists('commission_on_purchase_details');
    }
};
