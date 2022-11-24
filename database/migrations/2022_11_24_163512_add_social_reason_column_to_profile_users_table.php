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
        Schema::whenTableDoesntHaveColumn('profile_users', 'social_reason' ,function (Blueprint $table) {
            $table->string('social_reason')->default('');
        });
    }
};
