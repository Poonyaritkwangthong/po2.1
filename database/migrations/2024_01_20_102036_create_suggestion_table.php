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
        Schema::create('suggestion', function (Blueprint $table) {
            $table->id();
            $table->string('topic_name');
            $table->string('s_detail');
            $table->unsignedBigInteger('user_s_id');
            $table->timestamps();

            $table->foreign('user_s_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suggestion');
    }
};
