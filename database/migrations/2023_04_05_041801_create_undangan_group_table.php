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
        Schema::create('undangan_group', function (Blueprint $table) {
            $table->id();
            $table->string('nama_undangan_group', 191);
            $table->decimal('price_amount', 15, 2)->default(0);
            $table->string('status', 20)->default('active')->comment('active, inactive');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangan_group');
    }
};
