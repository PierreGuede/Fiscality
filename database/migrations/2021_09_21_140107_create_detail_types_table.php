<?php

use App\Fiscality\Bases\Base;
use App\Fiscality\Categories\Category;
use App\Fiscality\TypeImpots\TypeImpot;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('detail_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code')->unique(); /* A inserer l'id du type d'impot et son nom */
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Base::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(TypeImpot::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('taux')->nullable();
            $table->string('description')->nullable();
            $table->string('article')->nullable();
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
        Schema::dropIfExists('sub_categories');
    }
};
