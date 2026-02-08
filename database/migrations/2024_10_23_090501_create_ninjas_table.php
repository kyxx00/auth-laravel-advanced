<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ninjas', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // verplicht voor foreign key
            $table->id();
            $table->string('name');
            $table->text('bio');
            $table->foreignId('dojo_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ninjas');
    }
};
