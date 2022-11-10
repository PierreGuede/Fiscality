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
            $table->decimal('rent_amount');
            $table->integer('rental_period_year')->comment('en jour');
            $table->decimal('annual_deduction_limit');
            $table->decimal('applicable_deduction_limit');
            $table->decimal('amount_rent_reintegrated');
        });
    }


};
