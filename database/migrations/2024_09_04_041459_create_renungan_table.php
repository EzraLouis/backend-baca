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
        Schema::create('renungan', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->string('picture');
            $table->text('bacaan');
            $table->string('ayat_kunci');
            $table->text('kalimat_prinsip');
            $table->text('kalimat_renung');
            $table->date('date_renungan');
            $table->text('content_renungan');
            $table->text('doa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renungan');
    }
};
