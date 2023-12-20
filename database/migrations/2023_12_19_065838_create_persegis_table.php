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
        Schema::create('persegis', function (Blueprint $table) {
            $table->id();
            $table->float('panjang');
            $table->float('lebar');
            $table->float('keliling');
            $table->float('luas');
            $table->string('latensi');
            $table->string('waktu_kirim');
            $table->float('pitch');
            $table->float('yaw');
            $table->float('roll');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persegis');
    }
};
