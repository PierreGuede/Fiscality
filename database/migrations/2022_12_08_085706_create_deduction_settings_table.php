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
        Schema::create('deduction_settings', function (Blueprint $table) {
            $table->id();
            $table->decimal('rate_proceed_government', 15, 2);
            $table->decimal('rcm_product_rate', 15, 2);
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deduction_settings');
    }
};
