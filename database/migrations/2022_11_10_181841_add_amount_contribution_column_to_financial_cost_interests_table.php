
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
        Schema::whenTableDoesntHaveColumn('financial_cost_interests', 'amount_contribution', function (Blueprint $table) {
            $table->decimal('amount_contribution', 15, 2);
        });
    }
};
