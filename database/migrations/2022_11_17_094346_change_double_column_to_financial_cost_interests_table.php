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
        Schema::table('financial_cost_interests', function (Blueprint $table) {
            $table->decimal('amount_reintegrated', 15, 2)->change();
            $table->decimal('amount_contribution', 15, 2)->nullable()->change();
            $table->decimal('amount_interest_recorded', 15, 2)->nullable()->change();
            $table->decimal('interest_rate_charged', 15, 2)->nullable()->change();
            $table->decimal('bceao_interest_rate_for_the_year', 15, 2)->nullable();
            $table->decimal('maximum_rate', 15, 2)->nullable()->change();
            $table->decimal('rate_surplus', 15, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('financial_cost_interests', function (Blueprint $table) {
            //
        });
    }
};
