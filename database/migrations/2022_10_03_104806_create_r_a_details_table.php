<?php

use App\Fiscality\Companies\Company;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Fiscality\AccountingResults\AccountingResult;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_a_details', function (Blueprint $table) {
            $table->id();
            $table->string('account');
            $table->string('name');
            $table->float('amount');
            $table->enum('type',['income','expense']);
            $table->foreignIdFor(AccountingResult::class)->constrained();
            $table->foreignIdFor(Company::class)->constrained();
            $table->string('code')->unique();
            $table->softDeletes();
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
        Schema::dropIfExists('r_a_details');
    }
};
