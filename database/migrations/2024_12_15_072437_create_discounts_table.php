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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
    $table->string('name');
    $table->enum('type', ['percentage', 'fixed', 'bogo', 'combo']);
    $table->decimal('value', 8, 2);
    $table->dateTime('start_date');
    $table->dateTime('end_date');
    $table->json('applicable_items')->nullable();
    $table->boolean('is_active')->default(true);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
