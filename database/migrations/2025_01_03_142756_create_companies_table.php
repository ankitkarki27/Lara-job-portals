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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Company name
            $table->text('address')->nullable(); // Address (optional)
            $table->string('email')->nullable(); // Email (optional)
            $table->string('phone', 20)->nullable(); // Phone number (optional)
            $table->string('url')->nullable(); // Company website URL (optional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
