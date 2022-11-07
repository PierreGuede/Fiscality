<?php

use App\Fiscality\Companies\Company;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertising_gifts', function (Blueprint $table) {
            $table->id();
            $table->float("reintegrate_excedent");
            $table->float("deduction_limite");
            $table->float("total_amount");
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
        Schema::dropIfExists('advertising_gifts');
    }
};
