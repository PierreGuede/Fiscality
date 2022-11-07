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
        Schema::create('assistance_costs', function (Blueprint $table) {
            $table->id();
            $table->float("fat_amount");
            $table->float("general_cost");
            $table->float("limit_deduction");
            $table->float("reintegrate_amount");
            $table->foreignIdFor(Company::class)->constrained();
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