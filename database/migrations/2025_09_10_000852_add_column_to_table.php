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
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_name_ar', 255);
            $table->text('product_description_ar');
            $table->text('product_description_en');
            $table->text('product_description_es');
            $table->text('product_description_fr');
            $table->string('product_location_ar', 255);
            $table->string('product_category_ar', 100);
            $table->string('product_category_en', 100);
            $table->string('product_category_es', 100);
            $table->string('product_category_fr', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
