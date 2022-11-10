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
        Schema::table('advertising_gift_details', function (Blueprint $table) {
            $table->string('name');
            $table->decimal('amount', 15, 2);
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->foreignIdFor(\App\Fiscality\AdvertisingGifts\AdvertisingGift::class)->constrained();
        });
    }
};
