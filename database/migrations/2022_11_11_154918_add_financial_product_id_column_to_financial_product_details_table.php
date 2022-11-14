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
        Schema::table('financial_product_details', function (Blueprint $table) {
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->foreignId('financial_product_id')->constrained('financial_product');
        });
    }
};
