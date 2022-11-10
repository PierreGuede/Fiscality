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
        Schema::table('other_reintegration', function (Blueprint $table) {
            $table->decimal('commission_insurance_broker', 15, 2);
            $table->decimal('interest_paid', 15, 2);
        });
    }
};
