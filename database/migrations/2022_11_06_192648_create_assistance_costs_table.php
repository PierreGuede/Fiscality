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
        Schema::create('assistance_costs', function (Blueprint $table) {
            $table->id();
            $table->float("fat_amount");
            $table->float("general_cost");
            $table->float("limit_deduction");
            $table->float("reintegrate_amount");
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
        Schema::dropIfExists('assistance_costs');
    }
};
