<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories_for_majority', function (Blueprint $table) {
            //$table->foreignId("majority_id")->constrained("majority");
            //$table->foreignId("category_id")->constrained("categories");

            $table->bigInteger('majority_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->foreign('majority_id')->references('majority_id')->on('majority');

            $table->primary(["majority_id","category_id"]);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_for_majority');
    }
};
