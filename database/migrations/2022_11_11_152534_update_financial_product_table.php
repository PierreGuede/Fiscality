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
        Schema::table('financial_product', function (Blueprint $table) {
            $table->removeColumn('net_ircm_amount');
            $table->removeColumn('rate');
            $table->removeColumn('amount_deduct');

            $table->decimal('total_other_product_rcm', 15, 2);
            $table->decimal('total_income_securities_issued', 15, 2);
            $table->decimal('total_financial_product_amount', 15, 2);
        });
    }
};
