<?php

use App\Models\DiscountType;
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
        Schema::create('applicable_discounts', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->decimal('rate');
            $table->string('applicable_year');
            $table->foreignIdFor(DiscountType::class)->constrained();
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
        Schema::dropIfExists('applicable_discounts');
    }
};
