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
        Schema::table('donation_grant_contributions', function (Blueprint $table) {
            $table->decimal('turnover', 15, 2);
            $table->decimal('thousandth_turnover', 15, 2);
            $table->decimal('total_state_donation', 15, 2);
            $table->decimal('surplus_state_donation', 15, 2);
            $table->decimal('surplus_state', 15, 2);
        });
    }
};
