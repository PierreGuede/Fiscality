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
        Schema::create('other_reintegration', function (Blueprint $table) {
            $table->id();
            $table->decimal('expense_not_related', 15, 2);
            $table->decimal('unjustfified_expense', 15, 2);
            $table->decimal('remuneration_not_subject_withholding_tax', 15, 2);
            $table->decimal('financial_cost', 15, 2);
            $table->decimal('commission_on_purchase', 15, 2);
            $table->decimal('redevance', 15, 2);
            $table->decimal('accountind_financial_technical_assistance_costs', 15, 2);
            $table->decimal('donation_grant_contribution', 15, 2);
            $table->decimal('advertising_gift', 15, 2);
            $table->decimal('sumptuary_expenses', 15, 2);
            $table->decimal('occult_remuneration', 15, 2);
            $table->decimal('motor_vehicle_tax', 15, 2);
            $table->decimal('income_tax', 15, 2);
            $table->decimal('fines_penalities', 15, 2);
            $table->decimal('past_assets', 15, 2);
            $table->decimal('other_non_deductible_expense', 15, 2);
            $table->decimal('variation_conversation_gap', 15, 2);
            $table->decimal('excess_rent', 15, 2);
            $table->decimal('other_non_deductible_expenses', 15, 2);
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
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
        Schema::dropIfExists('other_reintegration');
    }
};
