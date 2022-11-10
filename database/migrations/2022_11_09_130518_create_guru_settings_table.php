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
        Schema::create('guru_settings', function (Blueprint $table) {
            $table->id();
            $table->decimal('state_donation_limit');
            $table->decimal('annual_deduction_limit');
            $table->decimal('state_prorata_deduction_RCM');
            $table->decimal('limit_deduction_rate');
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
        Schema::dropIfExists('guru_settings');
    }
};
