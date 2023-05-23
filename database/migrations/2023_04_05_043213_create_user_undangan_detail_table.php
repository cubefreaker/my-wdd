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
            $table->boolean('is_sample', 1)->default(0)->comment('0: not sample, 1: sample data');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('undangan_id');
            $table->string('slug', 191)->unique();
            $table->string('groom_name', 150);
            $table->string('groom_short_name', 50);
            $table->string('bride_name', 150);
            $table->string('bride_short_name', 50);
            $table->string('groom_parent_text', 255)->nullable();
            $table->string('bride_parent_text', 255)->nullable();
            $table->date('date_akad')->nullable();
            $table->time('time_akad_start')->default('00:00:00')->nullable();
            $table->time('time_akad_end')->default('00:00:00')->nullable();
            $table->date('date_resepsi')->nullable();
            $table->time('time_resepsi_start')->default('00:00:00');
            $table->time('time_resepsi_end')->default('00:00:00')->nullable();
            $table->date('date_unduhmantu')->nullable();
            $table->time('time_unduhmantu_start')->default('00:00:00')->nullable();
            $table->time('time_unduhmantu_end')->default('00:00:00')->nullable();
            $table->text('address_akad')->nullable();
            $table->text('address_resepsi')->nullable();
            $table->text('address_unduhmantu')->nullable();
            $table->string('map_akad_latlng', 191)->nullable();
            $table->string('map_resepsi_latlng', 191)->nullable();
            $table->string('map_unduhmantu_latlng', 191)->nullable();
            $table->text('gmap_akad_url')->nullable();
            $table->text('gmap_resepsi_url')->nullable();
            $table->text('gmap_unduhmantu_url')->nullable();
            $table->boolean('use_unduhmantu', 1)->default(0)->comment('0: not use, 1: use');
            $table->string('status', 10)->default('draft')->comment('draft, publish');
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
