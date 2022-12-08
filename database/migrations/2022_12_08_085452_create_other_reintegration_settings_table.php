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
        Schema::create('other_reintegration_settings', function (Blueprint $table) {
            $table->id();
            $table->decimal('bceao_interest_rate', 15, 2);
            $table->decimal('minimum_rate', 15, 2);
            $table->decimal('rate_deductibility_limit', 15, 2);
            $table->decimal('commission_on_purchase_deduction_limit', 15, 2);
            $table->decimal('redevance_deduction_rate_limit', 15, 2);
            $table->decimal('assistance_cost_deduction_rate_limit', 15, 2);
            $table->decimal('state_donation_limit', 15, 2);
            $table->decimal('state_donation_rate_thousandth', 15, 2);
            $table->decimal('advertising_gifts_deduction_limit', 15, 2);
            $table->decimal('excess_rent_applicable_deduction_limit', 15, 2);
            $table->decimal('annual_deduction_limit', 15, 2);
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('other_reintegration_settings');
    }
};
