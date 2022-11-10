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
        Schema::table('deduction', function (Blueprint $table) {
            $table->decimal('reversals_provisions',15, 2)->change();
            $table->decimal('financial_product',15,2)->change();
            $table->decimal('total_fiancial_product', 15, 2);
            $table->decimal('capital_gain', 15, 2);
            $table->decimal('currency_transaction_change', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deduction', function (Blueprint $table) {
            //
        });
    }
};
