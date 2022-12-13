<?php

use App\Fiscality\Companies\Company;
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
        Schema::create('vehicless', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('value');
            $table->string('plafond');
            $table->string('ecart');
            $table->string('dotation');
            $table->string('deductible_amortization');
            $table->string('date');
            $table->foreignIdFor(Company::class)->constrained();
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
        Schema::dropIfExists('type_amortizations');
    }
};
