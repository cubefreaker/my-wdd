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
        Schema::create('user_undangan_detail_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_undangan_detail_id');
            $table->string('file_name', 150)->nullable();
            $table->string('file_size', 10)->nullable();
            $table->string('file_format', 10)->nullable();
            $table->string('media_type', 10)->nullable();
            $table->text('media_url')->nullable();
            $table->timestamps();

            $table->foreign('user_undangan_detail_id')->references('id')->on('user_undangan_detail')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_undangan_detail_media');
    }
};
