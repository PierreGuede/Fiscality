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
        Schema::whenTableDoesntHaveColumn('other_reintegration', 'total_amount', function (Blueprint $table) {
            $table->decimal('total_amount', 15, 2);
        });
    }
};
