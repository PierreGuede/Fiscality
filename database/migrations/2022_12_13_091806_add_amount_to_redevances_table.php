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
        Schema::whenTableDoesntHaveColumn('redevances', 'amount', function (Blueprint $table) {
            $table->decimal('amount', 15, 2)->default(0);
        });
    }
};
