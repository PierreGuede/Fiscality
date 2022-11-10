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
        Schema::table('state_donations', function (Blueprint $table) {
            $table->decimal('total_state_donation', 15, 2);
            $table->decimal('surplus_state_donation', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('state_donations', function (Blueprint $table) {
            $table->dropColumn(['total_state_donation', 'surplus_state_donation']);
        });
    }
};
