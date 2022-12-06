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
        Schema::whenTableDoesntHaveColumn('users', 'two_factor_code', function (Blueprint $table) {
            $table->string('two_factor_code')->nullable();
        });
        Schema::whenTableDoesntHaveColumn('users', 'two_factor_expires_at', function (Blueprint $table) {
            $table->dateTime('two_factor_expires_at')->nullable();
        });
    }
};
