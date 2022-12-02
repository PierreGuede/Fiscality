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
        Schema::whenTableDoesntHaveColumn('type_company_type_impot', 'company_id', function (Blueprint $table) {
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
        });
    }
};
