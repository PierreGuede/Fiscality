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
        Schema::table('general_cost_details', function (Blueprint $table) {
            $table->renameColumn('compte', 'account');
            $table->renameColumn('designation', 'name');
        });
    }
};
