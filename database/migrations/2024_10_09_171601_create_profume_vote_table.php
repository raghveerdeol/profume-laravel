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
        Schema::create('profume_vote', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profume_id');
            $table->foreign('profume_id')->references('id')->on('profumes');

            $table->unsignedBigInteger('vote_id');
            $table->foreign('vote_id')->references('id')->on('votes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profume_vote');
    }
};
