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
        Schema::table('financial_costs', function (Blueprint $table) {
            $table->string('name');
            $table->integer('total_amount_reintegrated');
            $table->integer('interest_amount_reintegrated');
            $table->integer('condition_amount_reintegrated');
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->year('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('financial_costs', function (Blueprint $table) {
            //
        });
    }
};
