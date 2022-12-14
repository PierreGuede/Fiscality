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
        Schema::table('redevances', function (Blueprint $table) {
            $table->decimal('total_renumeration', 20, 2)->change();
            $table->decimal('deduction_limit', 20, 2)->change();
            $table->decimal('amount_reintegrated', 20, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('redevances', function (Blueprint $table) {
            //
        });
    }
};
