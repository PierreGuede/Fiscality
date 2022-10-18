<?php

use App\Models\User;
use App\Fiscality\Domains\Domain;
use App\Fiscality\Companies\Company;
use Illuminate\Support\Facades\Schema;
use App\Fiscality\TaxCenters\TaxCenter;
use Illuminate\Database\Schema\Blueprint;
use App\Fiscality\TypeCompanies\TypeCompany;
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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ifu');
            $table->string('path');
            $table->string('rccm');
            $table->string('path_rccm');
            $table->date('created_date');
            $table->string('email');
            $table->string('celphone');
            $table->foreignIdFor(TaxCenter::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(TypeCompany::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Domain::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Company::class)->nullable()->constrained()->cascadeOnDelete();
            $table->boolean('is_active')->default(1);
            $table->boolean('is_confirmed')->default(0);
            $table->enum('status',['approuved','rejected','pending'])->default('pending');
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
        Schema::dropIfExists('companies');
    }
};
