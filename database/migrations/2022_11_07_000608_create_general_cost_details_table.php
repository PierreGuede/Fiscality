<?php

use App\Fiscality\GeneralCosts\GeneralCost;
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
        Schema::create('general_cost_details', function (Blueprint $table) {
            $table->id();
            $table->integer('compte');
            $table->string('designation');
            $table->integer('amount');
            $table->foreignIdFor(GeneralCost::class)->constrained();
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
        Schema::dropIfExists('general_cost_details');
    }
};
