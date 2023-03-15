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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->string('producto');
            $table->string('Unidad');
            $table->string('precioUni');
            $table->string('tipoimpu');
            $table->string('impuesto');
            $table->string('entregar');
            $table->unsignedBigInteger('cate_id1');
            $table->unsignedBigInteger('cate_id2');
            $table->timestamps();

            $table->foreign('cate_id1')->references('id')->on('categoria1s');
            $table->foreign('cate_id2')->references('id')->on('categoria2s');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
