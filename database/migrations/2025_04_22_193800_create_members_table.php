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
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('street');
            $table->string('house_number');
            $table->string('city');
            $table->string('postal_code');
            $table->date('birthdate');
            $table->unsignedBigInteger('age')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('gender');
            $table->string('reason_of_leaving')->nullable();
            $table->date('date_of_leaving')->nullable();
            $table->boolean('is_archived')->default(false);
            $table->unsignedBigInteger("created_by")->nullable();
            $table->foreign("created_by")->references("id")->on("users")->onDelete("cascade");
            $table->unsignedBigInteger("updated_by")->nullable();
            $table->foreign("updated_by")->references("id")->on("users")->onDelete("cascade");
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
