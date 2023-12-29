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
        Schema::create('Product', function (Blueprint $table) {
            $table->id();
            $table->string('product_type', 3)->required();
            $table->string('product_code', 6)->required();
            $table->string('product_name', 50);
            $table->decimal('quantity');
            $table->string('note', 60)->nullable();
            $table->timestamps();
        });
    }

    /**$table
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Product');
    }
};
