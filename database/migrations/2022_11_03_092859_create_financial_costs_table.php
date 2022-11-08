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
        Schema::create('financial_costs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("total_amount_reintegrated");
            $table->integer("interest_amount_reintegrated");
            $table->integer("condition_amount_reintegrated");
            $table->foreignIdFor(Company::class)->constrained();
            $table->year("date");
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
        Schema::dropIfExists('financial_costs');
    }
};
