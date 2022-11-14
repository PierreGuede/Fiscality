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
            $table->dropColumn('net_ircm_amount');
            $table->dropColumn('rate');
            $table->dropColumn('amount_deduct');
        });
    }
};
