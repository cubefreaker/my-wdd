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
        Schema::create('user_undangan_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('undangan_id');
            $table->string('groom', 150)->default('Adam');
            $table->string('bride', 150)->default('Hawa');
            $table->string('groom_parent_text', 255)->nullable();
            $table->string('bride_parent_text', 255)->nullable();
            $table->date('date_akad');
            $table->time('time_akad_start')->default('00:00:00');
            $table->time('time_akad_end')->default('00:00:00');
            $table->date('date_resepsi');
            $table->time('time_resepsi_start')->default('00:00:00');
            $table->time('time_resepsi_end')->default('00:00:00');
            $table->date('date_unduhmantu');
            $table->time('time_unduhmantu_start')->default('00:00:00');
            $table->time('time_unduhmantu_end')->default('00:00:00');
            $table->text('address')->nullable();
            $table->longText('map_address')->nullable();
            $table->text('address_unduhmantu')->nullable();
            $table->longText('map_address_unduhmantu')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('undangan_id')->references('id')->on('undangan')->onUpdate('cascade')->onDelete('restrict');
            
            $table->index('user_id');
            $table->index('undangan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_undangan_detail');
    }
};
