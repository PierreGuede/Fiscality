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
        Schema::table('advertising_gifts', function (Blueprint $table) {
            $table->renameColumn('reintegrate_excedent', 'surplus_reintegrated');
            $table->renameColumn('deduction_limite', 'deduction_limit');
            $table->decimal('turnover', 15, 2);
            $table->string('total_amount', 15, 2)->change();
        });
    }
};
