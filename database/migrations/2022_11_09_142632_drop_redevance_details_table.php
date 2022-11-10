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
        Schema::dropIfExists('redevance_details');

        Schema::create('redevance_details', function (Blueprint $table) {
            $table->id();
            $table->integer('account');
            $table->string('designation');
            $table->integer('amount');
            $table->foreignIdFor(\App\Fiscality\Redevances\Redevance::class)->constrained();
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
        Schema::drop('redevance_details');
    }
};
