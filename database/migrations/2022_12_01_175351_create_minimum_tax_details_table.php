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
        Schema::create('minimum_tax_details', function (Blueprint $table) {
            $table->id();
            $table->integer('account')->unique();
            $table->string('name');
            $table->decimal('amount', 15, 2);
            $table->enum('type', ['collectable_product', 'volume']);
            $table->foreignIdFor(\App\Models\BusinessProfitTax::class)->constrained();
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
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
        Schema::dropIfExists('minimum_tax_details');
    }
};
