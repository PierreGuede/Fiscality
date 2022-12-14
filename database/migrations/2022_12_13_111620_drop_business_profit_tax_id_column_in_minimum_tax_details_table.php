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
        Schema::whenTableHasColumn('minimum_tax_details', 'business_profit_tax_id', function (Blueprint $table) {
            $table->dropForeign('minimum_tax_details_business_profit_tax_id_foreign');
            $table->dropColumn('business_profit_tax_id');
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
