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
        Schema::create('excess_amortzation_category_items', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->decimal('rate');
            $table->unsignedBigInteger('excess_amortzation_category_id');
            $table->foreign('excess_amortzation_category_id', 'excess_categories_and_items_foreign')->references('id')->on('excess_amortzation_categories');
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
        Schema::dropIfExists('excess_amortzation_category_items');
    }
};
