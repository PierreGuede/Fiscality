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
        Schema::table('state_donation_details', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Fiscality\StateDonations\StateDonation::class);
            $table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
            $table->foreignIdFor(\App\Models\DonationGrantContribution::class)->constrained();
        });
    }
};
