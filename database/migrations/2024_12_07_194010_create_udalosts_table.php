<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('udalosts', function (Blueprint $table) {
            $table->id();
            $table->string('nazov');
            $table->text('popis');
            $table->date('datum_uskutocnenia');
            $table->string('miesto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('udalosts');
    }
};
