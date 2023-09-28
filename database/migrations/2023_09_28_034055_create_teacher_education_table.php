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
        Schema::create('teacher_education', function (Blueprint $table) {
            $table->id();
            $table->uuid("teacher_id");
            $table->foreign("teacher_id")->references("id")->on("teachers")->onDelete('cascade');
            $table->string('degree');
            $table->text('fields_of_study');
            $table->string('institutions_attended');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_education');
    }
};
