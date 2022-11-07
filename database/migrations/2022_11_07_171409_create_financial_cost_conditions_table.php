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
        Schema::create('financial_cost_conditions', function (Blueprint $table) {
            $table->id();
            $table->double('amount_of_interest_recorded');
            $table->double('non_deductible_interest_amount');
            $table->double('deductible_interest_amount');
            $table->double('profit_before_tax');
            $table->double('interest_accrued');
            $table->double('depreciation_and_amortization');
            $table->double('allocations_to_provisions');
            $table->double('calculation_base');
            $table->double('deductibility_limit');
            $table->double('amount_reintegrate');
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
        Schema::dropIfExists('financial_cost_conditions');
    }
};
