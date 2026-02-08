<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dojos', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // heel belangrijk voor foreign keys
            $table->id();              // unsignedBigInteger automatisch
            $table->string('name');
            $table->text('description');
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dojos');
    }
};
