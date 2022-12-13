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
        Schema::whenTableDoesntHaveColumn('redevances', 'turnover', function (Blueprint $table) {
            $table->decimal('turnover', 15, 2)->default(0);
        });
    }
};
