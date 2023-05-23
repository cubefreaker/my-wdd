<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndanganTable extends Migration
{
    public function up()
    {
        Schema::create('undangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('undangan_group_id');
            $table->string('nama_undangan', 191);
            $table->string('laravel_controller_class', 191);
            $table->string('laravel_view_path', 191);
            $table->string('custom_css_class', 191)->nullable();
            $table->string('status', 20)->default('active')->comment('active, inactive');
            $table->timestamps();

            $table->foreign('undangan_group_id')->references('id')->on('undangan_group')->onUpdate('cascade')->onDelete('restrict');
            $table->index('undangan_group_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('undangan');
    }
}
