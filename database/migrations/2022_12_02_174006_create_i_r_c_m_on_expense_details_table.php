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
        Schema::create('i_r_c_m_on_expense_details', function (Blueprint $table) {
            $table->id();
            $table->string('field');
            $table->decimal('amount', 15, 2);
            $table->boolean('is_selected')->default(true);
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
//            $table->foreignIdFor(\App\Models\IRCMOnExpense::class)->constrained();
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
        Schema::dropIfExists('i_r_c_m_on_expense_details');
    }
};
