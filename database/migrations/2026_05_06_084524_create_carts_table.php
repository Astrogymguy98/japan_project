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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('curry_set_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('naan_rice_id')->nullable()->constrained('naan_rice')->cascadeOnDelete('naan_rice');
            $table->foreignId('side_menu_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('amount');
            $table->foreignId('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
