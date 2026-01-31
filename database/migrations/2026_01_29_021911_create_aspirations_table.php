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
        Schema::create('aspirations', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('feedback_id')->nullable();
            $table->string('title');
            $table->ForeignId('student_id');
            $table->string('description');
            $table->string('photo');
            $table->string('location');
            $table->ForeignId('category_id');
            $table->enum('status', ['pending', 'progress', 'complate','rejected'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirations');
    }
};
