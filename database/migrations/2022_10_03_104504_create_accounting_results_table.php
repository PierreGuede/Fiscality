<?php

use App\Fiscality\Companies\Company;
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
        Schema::create('accounting_results', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->constrained();
            $table->float('total_incomes');
            $table->float('total_expenses');
            $table->float('ar_value');
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
        Schema::dropIfExists('accounting_results');
    }
};
