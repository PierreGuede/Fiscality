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
        Schema::whenTableDoesntHaveColumn('guru_minimum_taxes', 'type_impot_id', function (Blueprint $table) {
            $table->foreignIdFor(\App\Fiscality\TypeImpots\TypeImpot::class)->nullable()->constrained();
        });
    }
};
