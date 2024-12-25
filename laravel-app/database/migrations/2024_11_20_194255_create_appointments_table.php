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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Patient
            $table->foreignId('counselor_id')->constrained('users')->onDelete('cascade'); // Counselor
            $table->date('date');
            $table->string('status'); // pending, confirmed, canceled
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
