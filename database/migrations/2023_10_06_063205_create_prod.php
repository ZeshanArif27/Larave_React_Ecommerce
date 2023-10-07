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
        Schema::create('prods', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->string('title',100)->nullable();
            $table->char('productCode',100)->nullable();
            $table->binary('image')->nullable();
            $table->integer('price');
            $table->integer('sku');
            $table->string('description')->nullable();
            $table->char('dimensions')->nullable();
            $table->char('capacity')->nullable();
            $table->json('features')->nullable();
            $table->char('stock')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prods');
    }
};
