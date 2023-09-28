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
        Schema::create('teacher_specializations', function (Blueprint $table) {
            $table->id();
            $table->uuid("teacher_id");
            $table->foreign("teacher_id")->references("id")->on("teachers")->onDelete('cascade');
            $table->unsignedBigInteger("specialization_id");
            $table->foreign("specialization_id")->references("id")->on("specializations")->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_specializations');
    }
};
