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
        Schema::create('accured_charges', function (Blueprint $table) {
            $table->id();
            $table->string('compte')->nullable();
            $table->string('designation');
            $table->enum('type', ['expense_provisioned', 'personnal_provision', 'provision']);
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
        Schema::dropIfExists('accured_charges');
    }
};
