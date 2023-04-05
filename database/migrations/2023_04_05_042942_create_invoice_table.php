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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('undangan_id');
            $table->text('notes')->nullable();
            $table->string('remark', 191)->nullable();
            $table->decimal('price_amount', 15, 2)->default(0);
            $table->decimal('paid_amount', 15, 2)->default(0);
            $table->string('paid_status', 20)->default('unpaid')->comment('unpaid, paid');
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
        Schema::dropIfExists('invoice');
    }
};
