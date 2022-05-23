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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->text('visi');
            $table->text('misi');
            $table->text('tentang');
            $table->text('alamat');
            $table->string('kontak', 50);
            $table->string('email', 100);
            $table->string('twitter', 100);
            $table->string('ig', 100);
            $table->string('fb', 100);
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
        Schema::dropIfExists('profils');
    }
};
