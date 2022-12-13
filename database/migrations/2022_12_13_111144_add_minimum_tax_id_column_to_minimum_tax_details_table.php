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
        Schema::whenTableDoesntHaveColumn('minimum_tax_details', 'minimum_tax_id', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\MinimumTax::class)->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('minimum_tax_details', function (Blueprint $table) {
            //
        });
    }
};
