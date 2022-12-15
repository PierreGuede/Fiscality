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
        Schema::whenTableDoesntHaveColumn('excesses', 'excess_amortzation_category_item_id', function (Blueprint $table) {
            $table->addColumn('unsignedBigInteger', 'excess_amortzation_category_item_id');
            $table->foreign('excess_amortzation_category_item_id', 'excesses_and_excess_amortization_cat_item_foreign')->references('id')->on('excess_amortzation_category_items');
        });

        Schema::whenTableHasColumn('excesses', 'category_imo', function (Blueprint $table) {
            $table->dropColumn('category_imo');
        });

        Schema::whenTableHasColumn('excesses', 'designation', function (Blueprint $table) {
            $table->dropColumn('designation');
        });
    }
};
