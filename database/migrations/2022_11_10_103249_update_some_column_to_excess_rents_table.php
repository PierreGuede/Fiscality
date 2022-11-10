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
        Schema::table('excess_rents', function (Blueprint $table) {
            $table->decimal('rent_amount', 15, 2)->change();
            $table->integer('rental_period_year')->change();
            $table->decimal('annual_deduction_limit', 15, 2)->change();
            $table->decimal('applicable_deduction_limit', 15, 2)->change();
            $table->decimal('amount_rent_reintegrated', 15, 2)->change();
        });
    }
};
