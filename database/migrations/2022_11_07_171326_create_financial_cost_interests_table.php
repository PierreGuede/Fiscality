<?php

use App\Fiscality\FinancialCosts\FinancialCost;
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
        Schema::create('financial_cost_interests', function (Blueprint $table) {
            $table->id();
            $table->double('amount_reintegrated');
            $table->double('amount_contribution')->nullable();
            $table->double('amount_interest_recorded')->nullable();
            $table->double('interest_rate_charged')->nullable();
            $table->double('bceao_interest_rate_for_the_year')->nullable();
            $table->double('maximum_rate')->nullable();
            $table->double('rate_surplus')->nullable();
            $table->foreignIdFor(FinancialCost::class)->constrained();
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
        Schema::dropIfExists('financial_cost_interests');
    }
};
