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
        Schema::create('teachers', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references("id")->on("teacher")->onDelete('cascade');
            $table->string("name");
            $table->text("description");
            $table->string('photo')->nullable();
            $table->enum('gender', ['L', 'P']);
            $table->string("phone_number");
            $table->text("address")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
