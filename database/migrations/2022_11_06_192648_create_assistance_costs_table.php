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
            $table->double('fat_amount');
            $table->double('general_cost');
            $table->double('limit_deduction');
            $table->double('reintegrate_amount');
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
