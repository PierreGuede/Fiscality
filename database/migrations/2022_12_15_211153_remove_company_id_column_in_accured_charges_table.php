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
        Schema::whenTableHasColumn('accured_charges', 'company_id' , function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Fiscality\Companies\Company::class);
            $table->dropColumn('company_id');
        });
    }
};
