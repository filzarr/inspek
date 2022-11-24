<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppids', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('pdf');
            $table->string('kategori');
            $table->enum('category', ['informasi berkala', 'informasi publik']);
            $table->string('tanggal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppids');
    }
};
