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
        Schema::create('profumes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 70);
            $table->text('description');
            $table->decimal('price', 6, 2);
            $table->unsignedSmallInteger('quantity');
            $table->string('brand', 100);
            $table->binary('image');
            $table->boolean('sponsored');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profumes');
    }
};
