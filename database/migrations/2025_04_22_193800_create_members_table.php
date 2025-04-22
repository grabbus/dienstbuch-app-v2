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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('salutation');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('mobile');
            $table->string('phone');
            $table->string('gender');
            $table->string('birthdate');
            $table->string('birthplace');
            $table->foreignId('course_id')->constrained('courses')->cascadeOnDelete();
            $table->foreignId('achievement_badge_id')->constrained('achievement_badges')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
