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
        Schema::create('taxable_income_head_office_expenses', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_amount', 15, 2);
            $table->foreignIdFor(App\Fiscality\AccountingResults\AccountingResult::class)->nullable()->constrained();
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
        Schema::dropIfExists('tax_results');
    }
};
