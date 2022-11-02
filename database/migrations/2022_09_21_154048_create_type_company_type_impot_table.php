<?php

use App\Fiscality\TypeCompanies\TypeCompany;
use App\Fiscality\TypeImpots\TypeImpot;
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
        Schema::create('type_company_type_impot', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TypeCompany::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(TypeImpot::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_company_type_impot');
    }
};
