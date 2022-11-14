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
        Schema::create('head_office_costs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->decimal('account_result', 15, 2);
            $table->decimal('total_reintegration', 15, 2);
            $table->decimal('total_deduction', 15, 2);
            $table->decimal('taxable_income_before_restatement_head_office_costs', 15, 2);
            $table->decimal('basis_calculating_deduction_limit', 15, 2);
            $table->decimal('deductible_head_office_costs', 15, 2);
            $table->decimal('non_deductible_head_office_costs', 15, 2);
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
        Schema::dropIfExists('head_office_costs');
    }
};
