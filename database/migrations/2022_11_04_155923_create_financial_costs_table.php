<?php

use App\Fiscality\Companies\Company;
use App\Fiscality\OtherReinstatements\OtherReinstatement;
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
            $table->string('conditionaal_amount');
            $table->integer('amount_reinstated');
            $table->integer('deducted_amount_interest');
            $table->integer('reintegrate_cost');
            $table->integer('interest_rate_applied');
            $table->integer('interest_rate_BCEAO');
            $table->integer('maximum_rate');
            $table->foreignIdFor(OtherReinstatement::class)->constrained();
            $table->foreignIdFor(Company::class)->constrained();
            $table->year('date');
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
