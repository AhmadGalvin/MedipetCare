<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id');
            $table->date('visit_date');
            $table->text('symptom');
            $table->unsignedBigInteger('diagnosis_id')->nullable();
            $table->text('prescription')->nullable();
            $table->timestamps();
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('medical_records');
    }
};