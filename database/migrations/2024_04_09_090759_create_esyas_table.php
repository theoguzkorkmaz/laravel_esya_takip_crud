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
        Schema::create('esyas', function (Blueprint $table) {
            $table->id();
            $table->string('esya_ad');
            $table->text('esya_aciklama');
            $table->integer('birim_id');
            $table->integer('esya_stok');
            $table->text('esya_resim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esyas');
    }
};
