<?php

use App\Fiscality\Companies\Company;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Fiscality\Amortizations\Amortization;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excesses', function (Blueprint $table) {
            $table->id();
            $table->string('category_imo');
            $table->string('designation');
            $table->string('taux_use');
            $table->string('taux_recommended');
            $table->string('ecart');
            $table->string('dotation');
            $table->string('deductible_amortization');
            $table->foreignIdFor(Amortization::class)->constrained();
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
        Schema::dropIfExists('excesses');
    }
};
