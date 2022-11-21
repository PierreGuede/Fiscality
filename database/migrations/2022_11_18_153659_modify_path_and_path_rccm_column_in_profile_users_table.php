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
        Schema::table('profile_users', function (Blueprint $table) {
            $table->renameColumn('path', 'ifu_file');
            $table->renameColumn('path_rccm', 'rccm_file');
        });
    }
};
