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
        Schema::create('sizin', function (Blueprint $table) {
            $table->id();
            $table->string('NomorSurat');
            $table->string('NamaKegiatan');
            $table->enum('HariKegiatan', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']);
            $table->date('TanggalKegiatan');
            $table->string('TempatKegiatan');
            $table->string('PJKegiatan');
            $table->integer('Semester');
            $table->string('NomorHPPJ');
            $table->boolean('Status')->default(true);
            $table->foreignIdFor(App\Models\User::class)->constrained()->OnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sizin');
    }
};
