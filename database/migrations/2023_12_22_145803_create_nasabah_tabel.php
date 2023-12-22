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
        Schema::create('data_nasabah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('no_cif', 11)->unique();
            $table->string('no_ktp', 16)->unique();
            $table->string('no_tabungan', 16)->unique();
            $table->string('nama_nasabah');
            $table->string('alamat');
            $table->string('kelamin', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_nasabah');
    }
};
