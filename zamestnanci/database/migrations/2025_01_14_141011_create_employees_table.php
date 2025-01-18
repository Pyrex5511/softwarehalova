<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Meno a priezvisko
            $table->string('title_before')->nullable(); // Titul pred menom
            $table->string('title_after')->nullable(); // Titul za menom
            $table->string('position'); // Pozícia
            $table->string('email')->unique(); // E-mail
            $table->string('phone')->nullable(); // Telefón
            $table->string('section')->nullable(); // Oddelenie
            $table->string('section_position')->nullable(); // Pozícia v oddelení
            $table->string('photo_path')->nullable(); // Fotka
            $table->integer('order')->default(0); // Poradie
            $table->softDeletes(); // Soft delete
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
