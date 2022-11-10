<?php

use Illuminate\Support\Facades\Schema;
use App\Fiscality\Deductions\Deduction;
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
        Schema::create('deduction_details', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->double('rcm_net_amount');
            $table->double('rate');
            $table->double('deductible_amount');
            $table->foreignIdFor(Deduction::class)->constrained();
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
        Schema::dropIfExists('deduction_details');
    }
};
